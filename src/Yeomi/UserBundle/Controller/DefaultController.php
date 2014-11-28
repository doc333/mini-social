<?php

namespace Yeomi\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
		//Doc333
        return $this->render('YeomiUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
