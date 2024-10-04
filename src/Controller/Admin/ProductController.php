<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Filesystem\Filesystem;

/**
 * @Route("admin/product")
 */
class ProductController extends AbstractController
{
    /**
     * @Route("/", name="admin_product_index", methods={"GET"})
     */
    public function index(ProductRepository $productRepository): Response
    {
        $products = $productRepository->findAll();
        return $this->render('admin/product/index.html.twig', [
            'products' => $products,
        ]);
    }

    /**
     * @Route("/new", name="admin_product_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            // **************** file upload ****************
            /** @var file $file */
            $file = $form['image']->getData();
            if($file){
                $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();
                // Move the file to the directory where brachures are stored
                try{
                    $file->move(
                        $this->getParameter('images_directory'), // in Servis.yaml defined folder for
                        $fileName
                    );
                } catch (FileException $e){
                    // ... handle exception f something happens during file upload
                }
                $product->setImage($fileName);
            }
            // **************** file upload ****************
            // **************** downloadable file upload ****************
            /** @var file $file */
            $file = $form['file']->getData();
            if($file){
                $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();
                // Move the file to the directory where brachures are stored
                try{
                    $file->move(
                        $this->getParameter('files_directory'), // in Servis.yaml defined folder for
                        $fileName
                    );
                } catch (FileException $e){
                    // ... handle exception f something happens during file upload
                    throw new Exception($e->getMessage(), 1);
                    
                }
                $product->setFile($fileName);
            }
            unset($file);
            // **************** file upload ****************
            $user = $this->getUser();
            $product->setUser($user);
            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('admin_product_index');
        }

        return $this->render('admin/product/new.html.twig', [
            'product' => $product,
            'form' => $form->createView(),
        ]);

    }




    /**
     * @Route("/{id}", name="admin_product_show", methods={"GET"})
     */
    public function show(Product $product): Response
    {
        return $this->render('admin/product/show.html.twig', [
            'product' => $product,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_product_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Product $product): Response
    {
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var file $file*/
            $file = $form['image']->getData();
            if($file){
                $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();
                // Move the file to the directory where brachures are stored
                try{
                    $file->move(
                        $this->getParameter('images_directory'), // in servis.yaml defined folder for upload images
                        $fileName
                    );
                } catch (FileException $e){
                    // ... handle exception f something happens during file upload
                }
                $product->setImage($fileName); // Related upload file name with Product table image field
            }
            // **************** downloadable file upload ****************
            /** @var file $file */
            $file = $form['file']->getData();
            if($file){
                $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();
                // Move the file to the directory where brachures are stored
                try{
                    $file->move(
                        $this->getParameter('files_directory'), // in Servis.yaml defined folder for
                        $fileName
                    );
                } catch (FileException $e){
                    // ... handle exception f something happens during file upload
                    throw new Exception($e->getMessage(), 1);
                    
                }
                $product->setFile($fileName);
            }
            unset($file);
            // **************** file upload ****************
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_product_index');
        }

        return $this->render('admin/product/edit.html.twig', [
            'product' => $product,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @return string
     */

    private function generateUniqueFileName(){
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }

    /**
     * @Route("/{id}", name="admin_product_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Product $product): Response
    {
        // Check if CSRF token is valid
    if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->request->get('_token'))) {

        // Check if product has associated images
        if (count($product->getImages()) > 0) {
            // Show error message if images are present
            $this->addFlash('error', 'Echec lors de la suppression de ce produit. Supprimez d\'abord les images de ce produits!');
        } else {

            try {
                // Get entity manager
                $entityManager = $this->getDoctrine()->getManager();

                // // Remove related files and images before deleting the product
                $filesystem = new Filesystem();

                // Delete main product file (e.g., image or file path)
                $imagePath = $product->getImage(); // Assuming you have an imagePath field
                if ($imagePath && file_exists($imagePath)) {
                    $filesystem->remove($imagePath);
                }

                // Delete file
                $filePath = $product->getFile();
                if ($filePath && file_exists($filePath)) {
                    $filesystem->remove($filePath);
                }

                // Delete additional images related to the product (if any)
                foreach ($product->getImages() as $image) {
                    $imagePath = $image->getImage(); // Assuming images have a getFilePath method
                    if ($imagePath && file_exists($imagePath)) {
                        $filesystem->remove($imagePath);
                    }
                }

                // Now remove the product itself
                $entityManager->remove($product);
                $entityManager->flush();
                // Flash success message
                $this->addFlash('success', 'Produit supprimé avec succès, ainsi que les fichiers associés.');
            } catch (FileException $e) {
                throw $e->getMessage();
            }
            

            
        }
    }

    // Redirect back to the product index page
    return $this->redirectToRoute('admin_product_index');
    }
}
