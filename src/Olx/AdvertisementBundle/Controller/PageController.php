<?php

namespace Olx\AdvertisementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Olx\AdvertisementBundle\Entity\AdvertisementRepository;
use Symfony\Component\HttpFoundation\Request;;

class PageController extends Controller
{
    const ITEMS_PER_PAGE = 25;

    public function indexAction(Request $request)
    {
        $datos          = array();
        $requestData    = 'LISTADO VACIO';

        if($request->getMethod() == 'POST') {
            $requestData = $request->request->get('search');

            if(!empty($requestData)){
                return $this->redirect($this->generateUrl('olx_advertisement_listado', array('search'=>urlencode($requestData))));
            }
        }

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $datos,
            0,
            self::ITEMS_PER_PAGE
        );

        return $this->render('OlxAdvertisementBundle:Page:listado.html.twig',
            array(
                'pagination'=>$pagination,
                'total'=>count($datos),
                'titulo'=>$requestData
             ));
    }

    public function searchAction($search){
        $page   = isset($_GET['page']) ? $_GET['page'] : 0;

        $datos          = array();

        $repo   = new AdvertisementRepository();
        $datos  = $repo->selectByCategory($search);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $datos,
            $page,
            self::ITEMS_PER_PAGE
        );

        return $this->render('OlxAdvertisementBundle:Page:listado.html.twig',
            array(
                'pagination'=>$pagination,
                'total'=>count($datos),
                'titulo'=>urldecode($search)
            ));
    }
}
