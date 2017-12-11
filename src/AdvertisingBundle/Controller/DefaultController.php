<?php

namespace AdvertisingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * indexAction
     * 测试
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @author yangbiao<yangbiao@readtv.cn>
     */
    public function indexAction()
    {
        echo 123123;
        return $this->render('AdvertisingBundle:Default:index.html.twig');
    }
}
