<?php

namespace Acme\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{


    public function indexAction()
    {
        return $this->render('AcmeTestBundle:Default:index.html.twig',['name'=>'Acme/index']);
    }
}
