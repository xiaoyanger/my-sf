<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/test_index")
     */
    public function indexAction()
    {
        return $this->render('TestBundle:Default:index.html.twig',['name'=>'TestBundle']);
    }
}
