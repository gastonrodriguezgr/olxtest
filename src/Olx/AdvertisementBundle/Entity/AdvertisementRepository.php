<?php
namespace Olx\AdvertisementBundle\Entity;
use Olx\AdvertisementBundle\Entity\Advertisement;

class AdvertisementRepository {

    public function selectByCategory($category){
        $url        = "http://api-v2.olx.com/items?location=www.olx.com.ar&searchTerm=".$category;
        $json_data  = file_get_contents($url);
        $Jdatos     = json_decode($json_data);
        $datos      = $Jdatos->data;

        $res    = array();
        $total  = count($datos);
        if($total){
            for($i=0;$i<$total; $i++){
                $item = $datos[$i];
                $adv  = new Advertisement();
                $adv->setTitle($item->title);
                $adv->setDescription($item->description);
                $adv->setCondition($item->condition);
                $adv->setCoordinates($item->coordinates);
                $adv->setLocation($item->displayLocation);
                $price = $item->price;
                if(get_class($price) == 'stdClass'){
                    $adv->setPrice($price->displayPrice);
                }
                $adv->setDate($item->date->day."/".$item->date->month."/".$item->date->year);
                $adv->setImage($item->fullImage);
                $adv->setIsSold($item->isSold);
                $adv->setOptionals($item->optionals);
                $adv->setThumb($item->thumbnail);
                $adv->setResumeTitle($item->titleCustom);
                $adv->setId($i);
                $res[$i] = $adv;
            }
        }
        return $res;
    }
}