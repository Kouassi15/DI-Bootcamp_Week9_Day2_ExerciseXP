<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyController extends AbstractController
{
    #[Route('/hello', name: 'app_my')]
    public function hello(): Response
    {
        return new Response('Hello, Symfony!');
    }
}
