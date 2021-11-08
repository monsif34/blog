<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact/{city}", name="contact")
     */
    public function index(string $city): Response
    {
        return $this->render('contact/index.html.twig', [
            'name' => 'coucou ',
            'city'=> $city
        ]);
    }



}
