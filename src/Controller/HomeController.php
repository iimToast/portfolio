<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    /**
     * @Route("/", name="Home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'Bienvenue ! Voici un peu d\'actualité digitale ! Bonne navigation :)',
        ]);
    }
}