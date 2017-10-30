<?php

namespace KS\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KSDemoBundle:Default:index.html.twig');
    }
}
