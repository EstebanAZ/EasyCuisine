<?php

// src/Controller/HomeController.php

namespace App\Controller;

use App\Repository\RecipeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(RecipeRepository $recipeRepository): Response
    {
        // Fetch all recipes from the repository
        $recipes = $recipeRepository->findAll();

        return $this->render('home/index.html.twig', [
            'recipes' => $recipes, // Pass the recipes variable to the template
        ]);
    }
}