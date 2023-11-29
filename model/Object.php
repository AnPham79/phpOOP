<?php
class productObject {
    private int $id_product;
    private string $name_product;
    private string $photo_product;
    private string $price_product;
    private string $description_product;
    private string $FK_id_category;

    public function __construct() {
        
    }

    public function getIdProduct()
    {
        return $this->id_product;
    }

    public function setIdProduct($var)
    {
        $this->id_product = $var;
    }

    public function getNameProduct()
    {
        return $this->name_product;
    }

    public function setNameProduct($var)
    {
        $this->name_product = $var;
    }


    public function getPhotoProduct()
    {
        return $this->photo_product;
    }

    public function setPhotoProduct($var)
    {
        $this->photo_product = $var;
    }

    public function getDescriptionProduct()
    {
        return $this->description_product;
    }

    public function setDescriptionProduct($var)
    {
        $this->description_product = $var;
    }

    public function getPriceProduct()
    {
        return $this->price_product;
    }

    public function setPriceProduct($var)
    {
        $this->price_product = $var;
    }

    public function getFKcategoryProduct()
    {
        return $this->FK_id_category;
    }

    public function setFKcategoryProduct($var)
    {
        $this->FK_id_category = $var;
    }
}

class categoryObject {
    private int $id_category;
    private string $name_category;

    public function getIdCategory() {
        return $this->id_category;
    }

    public function setIdCategory($var) {
        $this -> id_category = $var;
    }

    public function getNameCategory() {
        return $this->name_category;
    }

    public function setNameCategory($var) {
        return $this->name_category = $var;
    }
}

?>