<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RepositoryController extends AbstractController
{
    public function index()
    {
        return $this->render('repository/index.html.twig');
    }
}
