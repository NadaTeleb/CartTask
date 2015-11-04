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
        $em = $this->getDoctrine()->getManager();

        $Items = $this->getDoctrine()
            ->getRepository('AppBundle:Items')
            ->findAll();

        if (!$Items) {
            //throw $this->createNotFoundException(
              echo  'No items found ';
            //);
        }
        else {
            return new Response(
                '<html><body>Lucky number: '.$Items.'</body></html>'
            );
        }

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'items' => $Items,
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}
