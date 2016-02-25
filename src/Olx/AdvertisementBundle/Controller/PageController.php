<?php

namespace Olx\AdvertisementBundle\Controller\Page;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('OlxAdvertisementBundle:Default:index.html.twig');
    }
}
