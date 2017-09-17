<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SadController extends Controller
{
    /**
     * @Route("/sad/list")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);

        return $this->render('sad/list.html.twig', array(
            'number' => $number,
        ));
    }
}