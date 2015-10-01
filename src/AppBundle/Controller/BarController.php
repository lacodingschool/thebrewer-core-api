<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Bar;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class BarController extends Controller
{
    /**
     * @Route("/bars", name="list_bars", )
     * @Method({"GET"})
     */
    public function listAction(Request $request)
    {
        $this->get('doctrine')->getRepository('AppBundle:Bar')
            ->findBy(array(
                ''
            ));

        // replace this example code with whatever you need
        return new JsonResponse(array(
            'status' => $this->generateUrl('homepage')
        ));
    }
}
