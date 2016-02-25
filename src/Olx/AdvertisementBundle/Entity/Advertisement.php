<?php
namespace Olx\AdvertisementBundle\Entity;

class Advertisement{

    private $id;
    private $coordinates;
    private $description;
    private $price;
    private $condition;
    private $date;
    private $fullimage;
    private $thumb;
    private $title;
    private $resumeTitle;
    private $optionals;
    private $location;
    private $isSold;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setCoordinates($coordinates){
        $this->coordinates = $coordinates;
    }

    public function getCoordinates(){
        return $this->coordinates;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setCondition($condition){
        $this->condition = $condition;
    }

    public function getCondition(){
        return $this->condition;
    }

    public function setDate($date){
        $this->date = $date;
    }

    public function getDate(){
        return $this->date;
    }

    public function setImage($image){
        $this->fullimage = $image;
    }

    public function getImage(){
        return $this->fullimage;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setResumeTitle($title){
        $this->resumeTitle = $title;
    }

    public function getResumeTitle(){
        return $this->resumeTitle;
    }

    public function setThumb($thumb){
        $this->thumb = $thumb;
    }

    public function getThumb(){
        return $this->thumb;
    }


    public function setOptionals($optionals){
        $this->optionals = $optionals;
    }

    public function getOptionals(){
        return $this->optionals;
    }

    public function setLocation($location){
        $this->location = $location;
    }

    public function getLocation(){
        return $this->location;
    }

    public function setIsSold($isSold){
        $this->isSold = $isSold;
    }

    public function isSold(){
        return $this->isSold;
    }
}