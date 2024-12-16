<?php

namespace App\Controller\Admin;

use App\Entity\Module;
use App\Form\ModuleType;
use App\Repository\ModuleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/module")
 */
class ModuleController extends AbstractController
{

    /**
     * @Route("/", name="admin_module_index", methods={"GET"})
     */
    public function index(ModuleRepository $moduleRepository): Response
    {
        return $this->render('admin/module/index.html.twig', [
            'modules' => $moduleRepository->findAll(),
        ]);
    }

   

    /**
     * @Route("/new", name="admin_module_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $module = new Module();
        $form = $this->createForm(ModuleType::class, $module);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form['file']->getData();
            if ($file) {
                $fileName = $this->handleFileUpload($file);
                $module->setFile($fileName);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($module);
            $entityManager->flush();

            return $this->redirectToRoute('admin_module_index');
        }

        return $this->render('admin/module/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_module_show", methods={"GET"})
     */
    public function show(Module $module): Response
    {
        return $this->render('admin/module/show.html.twig', [
            'module' => $module,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_module_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Module $module): Response
    {
        $form = $this->createForm(ModuleType::class, $module);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form['file']->getData();
            if ($file) {
                // Delete the old file
                $this->deleteFile($module->getFile());

                // Upload new file
                $fileName = $this->handleFileUpload($file);
                $module->setFile($fileName);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            return $this->redirectToRoute('admin_module_index');
        }

        return $this->render('admin/module/edit.html.twig', [
            'module' => $module,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_module_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Module $module): Response
    {
        if ($this->isCsrfTokenValid('delete' . $module->getId(), $request->request->get('_token'))) {
            // Delete associated file
            $this->deleteFile($module->getFile());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($module);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_module_index');
    }

    /**
     * Handle file upload
     * 
     * @param UploadedFile $file
     * @return string
     */
    private function handleFileUpload($file): string
    {
        $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();

        try {
            $file->move(
                $this->getParameter('files_directory'),
                $fileName
            );
        } catch (FileException $e) {
            throw new \Exception('File upload failed: ' . $e->getMessage());
        }

        return $fileName;
    }

    /**
     * Delete a file from the server
     * 
     * @param string|null $fileName
     * @return void
     */
    private function deleteFile(?string $fileName): void
    {
        $filesystem = new Filesystem();
        if ($fileName) {
            $filePath = $this->getParameter('files_directory') . '/' . $fileName;
            if ($filesystem->exists($filePath)) {
                $filesystem->remove($filePath);
            }
        }
    }

    /**
     * Generate a unique file name
     * 
     * @return string
     */
    private function generateUniqueFileName(): string
    {
        return md5(uniqid());
    }
}
