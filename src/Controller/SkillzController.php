<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class SkillzController extends Controller
{
    /**
     * @Route("/Compétences", name="skillz")
     */
    public function index()
    {
        return $this->render('skillz/index.html.twig', [
            'controller_name' => 'Compétences',
        ]);
    }
}
