<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WildController extends AbstractController
{
    /**
     * @Route("/wild/show/{slug<[a-z0-9-]+>}", defaults={"slug" = ""}, name="wild_show")
     */
    public function show(string $slug)
    {
        $showName = str_replace('-', ' ', $slug);
        $showName = ucwords($showName);

        return $this->render('wild/show.html.twig', [
            'showName' => $showName
        ]);
    }
}
