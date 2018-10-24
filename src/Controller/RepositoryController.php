<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RepositoryController extends Controller
{
    public function index()
    {
        $client = $this->get('eight_points_guzzle.client.github_client');
        $res = $client->get($this->getUser()->getReposUrl());
        $repos = json_decode($res->getBody()->getContents());
        return $this->render('repository/index.html.twig', [
            'repos' => $repos,
        ]);
    }
}
