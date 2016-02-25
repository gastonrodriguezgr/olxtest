<?php

namespace Olx\AdvertisementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ComponentController extends Controller
{
    public function itemListadoAction($item)
    {
        return $this->render('OlxAdvertisementBundle:Component:itemListado.html.twig', array('item'=>$item));
    }
}
