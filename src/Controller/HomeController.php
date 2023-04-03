<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class HomeController extends AbstractController
{
    public function index(Request $request)
    {
        return $this->render('index.html.twig', [

        ]);
    }
}