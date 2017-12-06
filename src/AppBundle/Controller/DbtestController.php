<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;

class DbtestController extends Controller
{

    /**
     * @Route("/dbtest/insertdb")
     */
    public function insertdbAction()
    {
        $product = new Product();
        $product->setName('333');
        $product->setPrice(33);
        $product->setDescription('333');
        $product->setDescs('33');
        $em = $this->getDoctrine()->getManager();
        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        // 告诉Doctrine你希望（最终）存储Product对象（还没有语句执行）
        $em->persist($product);
        // actually executes the queries (i.e. the INSERT query)
        // 真正执行语句（如，INSERT 查询）
        $em->flush();
        return new Response('Saved new product with id '.$product->getId());
    }

    /**
     * @Route("/dbtest/selectdb")
     */
    public function selectdbAction()
    {
        $product = $this->getDoctrine()
                        ->getRepository('AppBundle:Product')
                        ->find(1);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id 1'
            );
        }
        return new Response('echo name for id is 1=>'.$product->getName());
    }

    /**
     * @Route("/dbtest/selecaall")
     */
    public function selecaallAction()
    {
        $repository = $this->getDoctrine()
                        ->getRepository('AppBundle:Product');
        //001
        $product = $repository->findByName(333);//findOneById--findOneByName-findByPrice
        //002
        $product = $repository->findOneBy(
            array('name' => 'Keyboard', 'price' => 19.99)
        );
        //003
        $product = $repository->findBy(
            array('name' => '333'),
            array('id' => 'DESC')
        );
        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id 1'
            );
        }
        echo '<pre>';
        print_r($product);
        die;
    }

    /**
     * @Route("/dbtest/uploaddb")
     */
    public function uploaddbAction()
    {

        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('AppBundle:Product')->findOneById(1);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id 1'
            );
        }

        $product->setName('New product name for id 1');
        $em->flush();
        die;

    }

    /**
     * @Route("/dbtest/deldb")
     */
    public function deldbAction(){
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('AppBundle:Product')->findOneById(6);
        if (!$product) {
            die('No product found for id 6');
            throw $this->createNotFoundException(
                'No product found for id 6'
            );
        }
        $em->remove($product);
        $em->flush();
        die;
    }
}