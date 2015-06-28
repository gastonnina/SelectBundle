<?php

namespace Gaston\Bundle\SelectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GastonSelectBundle:Default:index.html.twig', array('name' => $name));
    }
}
