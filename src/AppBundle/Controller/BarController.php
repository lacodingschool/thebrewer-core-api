<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Bar;
use AppBundle\Fixtures\BarFxitures;
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
        $optionnals = array(
            'lng' => 'pos_lon',
            'lat' => 'pos_lat'
        );

        $filters = array();
        foreach($optionnals as $opt => $field) {
            if($request->query->has($opt))
                $filters[$field] = $request->query->get($opt);
        }

        $list_bars = $this->get('doctrine')->getRepository('AppBundle:Bar')
            ->findBy($filters);

        // replace this example code with whatever you need
        return new JsonResponse($list_bars);
    }
}
