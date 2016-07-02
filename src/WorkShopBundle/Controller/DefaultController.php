<?php

namespace WorkShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\Annotations\Delete;
use FOS\RestBundle\Controller\Annotations\Head;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Patch;
use FOS\RestBundle\Controller\Annotations\Options;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Put;

use WorkShopBundle\Entity\WorkShop;
use WorkShopBundle\Entity\Provider;
use WorkShopBundle\Entity\Product;
use WorkShopBundle\Entity\Owner;
use WorkShopBundle\Entity\HumainDefinition;
use WorkShopBundle\Entity\Customer;
use WorkShopBundle\Entity\Contact;
use WorkShopBundle\Entity\Command;
use WorkShopBundle\Entity\Address;
use WorkShopBundle\Entity\Categories\Sculpture;
use WorkShopBundle\Entity\Categories\Painting;
use WorkShopBundle\Entity\Categories\Other;
use WorkShopBundle\Entity\Categories\Furniture;
use WorkShopBundle\Entity\Categories\Fresco;


class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('WorkShopBundle:Default:index.html.twig');
    }

    /**
     * @Get("/setData")
     */
    public function setDefaultData(){
      $em = $this->getDoctrine()->getManager();

      $address1 = new Address();
      $address1->setAddress1('test avenue');
      $address1->setPostCode('35400');
      $address1->setCity('Saint-Malo');
      $address1->setCountry('France');
      $address1->setPhoneNumber('01234567890');
      $address1->setEmail('defaultmail@local.com');



      $humaineDefinition = new HumainDefinition();
      $humaineDefinition->setFirstName('Jhon');
      $humaineDefinition->setLastName('Doe');
      $humaineDefinition->setAddress($address1);

      $owner = new Owner();
      $owner->setHumain($humaineDefinition);

      $workshop = new WorkShop();
      $workshop->setName('Default workshop');
      $workshop->setTurnover(10000);
      $workshop->setHumain($humaineDefinition);

      $other = new Other();

      $prod = new Product();
      $prod->setDesignation('Test Product');
      $prod->setPrice(200);
      $prod->setVat(19.5);
      $prod->setCategoryClassName(get_class($other));

      $em->persist($address1);
      $em->persist($humaineDefinition);
      $em->persist($owner);
      $em->persist($workshop);
      $em->persist($prod);
      $em->flush();

      return $this->render('WorkShopBundle:Default:index.html.twig', array(
      'data' => 'OK'
      ));
    }


    /**
     * @param User $user
     * @return array
     * @Route("getWorkshop")
     * @View()
     * @ParamConverter("workshop", class="WorkShopBundle:WorkShop")
     */
    public function getWorkshop(WorkShop $worhshop){
      return array('workshop' => $worhshop);
    }

    /**
    * @Get("/humains", name="_hum")
    */
    public function getAllHumain(){
      $em = $this->getDoctrine()->getManager();
      $hd = $em->getRepository('WorkShopBundle:HumainDefinition')->findAll();
      return array('humain' => $hd);
    }

    /**
    * @Get("/address", name="_addr")
    */
    public function getAllAddress(){
      $em = $this->getDoctrine()->getManager();
      $addr = $em->getRepository('WorkShopBundle:Address')->findAll();
      return array('address' => $addr);
    }

    /**
    * @Get("/products", name="_prod")
    */
    public function getAllProduct(){
      $em = $this->getDoctrine()->getManager();
      $prod = $em->getRepository('WorkShopBundle:Product')->findAll();
      return array('address' => $prod);
    }

}
