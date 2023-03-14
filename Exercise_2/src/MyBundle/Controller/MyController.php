<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyController extends AbstractController
{
    #[Route('/my_bundle', name: 'app_my')]
    public function index(): Response
    {
        return new Response('Hello from MyBundle!');
    }
}
