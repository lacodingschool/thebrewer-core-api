<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Bar;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class BarController extends Controller
{

    public function OneAction(Request $request)
    {
        return new JsonResponse(array(
            'status' => "ok"
        ));
    }

    public function AllAction(Request $request)
    {
        return new JsonResponse(array(
            'status' => "ok"
        ));
    }

    public function BeersByBarAction(Request $request)
    {
        return new JsonResponse(array(
            'status' => "ok"
        ));
    }
}
