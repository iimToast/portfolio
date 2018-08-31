<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class MeController extends Controller
{
    /**
     * @Route("/MeMyselfAndI", name="MeMyselfAndI")
     */
    public function index()
    {
        return $this->render('me/index.html.twig', [
            'controller_name' => 'Me Myself and I',
            'controller_img' => 'img/KevinBrusson.jpg',
            'controller_img_alt' => 'Kevin Brusson',
        ]);
    }
}
