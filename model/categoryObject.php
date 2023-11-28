<?php

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