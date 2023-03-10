<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminCategoryController extends AbstractController
{
    /**
     * @Route("/admin/category", name="app_admin_category")
     */
    public function index(): Response
    {
        return $this->render('admin_category/index.html.twig', [
            'controller_name' => 'AdminCategoryController',
        ]);
    }
    
    /**
     * @Route("/gestion_category/afficher", name="category_afficher")
     */
    public function afficher_category(CategorieRepository $repoCategory)
    {
        $categories = $repoCategory->findAll();

        return $this->render("admin_category/category_afficher.html.twig", [
            "categories" => $categories
        ]);

    }
}
