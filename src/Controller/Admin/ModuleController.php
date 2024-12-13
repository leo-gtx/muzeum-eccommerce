<?php

namespace App\Controller\Admin;

use App\Entity\Module;
use App\Form\ModuleType;
use App\Repository\ModuleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
    public function new(Request $request,ModuleRepository $moduleRepository): Response
    {
        //echo "Product id:". $id;
        //die();
        $module = new Module();
        $form = $this->createForm(ModuleType::class, $module);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();


            $file = $form['file']->getData();
            if($file){
                $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();
                // Move the file to the directory where brachures are stored
                try{
                    $file->move(
                        $this->getParameter('files_directory'), // in servis.yaml defined folder for upload modules
                        $fileName
                    );
                } catch (FileException $e){
                    throw new Exception($e->getMessage(), 1);
                }
                $module->setFile($fileName); // Related upload file name with Product table module field
            }
            $entityManager->persist($module);
            $entityManager->flush();

            return $this->redirectToRoute('admin_module_index');
        }

        

        return $this->render('admin/module/new.html.twig', [
            
            'form' => $form->createView(),
        ]);
    }

    /**
     * @return string
     */
    private function generateUniqueFileName(){
        return md5(uniqid());
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
            $entityManager = $this->getDoctrine()->getManager();


            $file = $form['file']->getData();
            if($file){
                $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();
                // Move the file to the directory where brachures are stored
                try{
                    $file->move(
                        $this->getParameter('files_directory'), // in servis.yaml defined folder for upload modules
                        $fileName
                    );
                    $fileOld = $this->getParameter('files_directory').'/'.$module->getFile(); // Assuming you have an imagePath field
                    if ($fileOld && file_exists($fileOld)) {
                        $filesystem->remove($fileOld);
                    }
                } catch (FileException $e){
                    throw new Exception($e->getMessage(), 1);
                }
                $module->setFile($fileName); // Related upload file name with Product table module field
            }
            $entityManager->persist($module);
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
    public function delete(Request $request,Module $module ): Response
    {
        {
            // echo "Product Id: ".$pid;
            // die();
            if ($this->isCsrfTokenValid('delete'.$module->getId(), $request->request->get('_token'))) {
                $entityManager = $this->getDoctrine()->getManager();
                // Delete Old module 
                try {
                    $modulePath = $this->getParameter('files_directory').'/'.$module->getFile(); // Assuming you have an imagePath field
                    if ($modulePath && file_exists($modulePath)) {
                        $filesystem->remove($modulePath);
                    }
                } catch (\Exception $e) {
                    $this->addFlash('error', $e->getMessage()) ;
                }
                $entityManager->remove($module);
                $entityManager->flush();
            }

            return $this->redirectToRoute('admin_module_index');
        }
    }}
