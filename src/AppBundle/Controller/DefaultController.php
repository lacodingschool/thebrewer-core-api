<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Bar;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {



        // replace this example code with whatever you need
        return new JsonResponse(array(
            'status' => $this->generateUrl('homepage')
        ));
    }
}