<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Items;
use AppBundle\Entity\Carts;
use AppBundle\Entity\CartsItems;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $Items = $this->getDoctrine()
            ->getRepository('AppBundle:Items')
            ->findAll();

        if (!$Items) {
            echo  'No items found ';
        }
        else {

        }
        return $this->render('default/index.html.twig', array(
            'items' => $Items,
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

//    /**
//     * @Route("/", name="CaretItems/1")
//     */
//    public function caretItems(Request $request)
//    {
//    }
//
//    /**
//     * @Route("/", name="homepage")
//     */
//    public function AddItem(Request $itemId)
//    {
//        $this->getDoctrine()
//            ->getRepository('AppBundle:CartsItems')
//            ->findAll();
//
//        $this->$entityManager->persist($entity);
//          $entityManager->flush();
//
//        return $this->render('default/index.html.twig', array(
//            'items' => $Items,
//            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
//        ));
//    }
}
