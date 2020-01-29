<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends FooBarController
{
    /**
     * @Route("/", name="default")
     */
    public function index(): Response
    {
        $this->logger->critical('foo bar');

        return new Response('All Works!');
    }
}
