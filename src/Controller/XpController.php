<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class XpController extends Controller
{
    /**
     * @Route("/Expériences", name="xp")
     */
    public function index()
    {
        return $this->render('xp/index.html.twig', [
            'controller_name' => 'Expériences',
        ]);
    }
}
