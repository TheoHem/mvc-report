<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReportController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(): Response
    {
        $number = random_int(0, 100);
        $name = "Theo";

        return $this->render('index.html.twig', [
            'name' => $name,
        ]);
    }

    /**
     * @Route("/about")
     */
    public function about(): Response
    {
        $number = random_int(0, 100);
        $name = "Theo";

        return $this->render('about.html.twig', [
        ]);
    }

    /**
     * @Route("/report")
     */
    public function report(): Response
    {
        $number = random_int(0, 100);
        $name = "Theo";

        return $this->render('report.html.twig', [
        ]);
    }
}
