<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlamesController extends Controller
{
    /**
     * @Route("/blames")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);

        return $this->render('blames.html.twig', array(
            'number' => $number,
        ));
    }
}