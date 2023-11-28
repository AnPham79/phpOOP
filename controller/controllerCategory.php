<?php

class controllerCategory
{
    public function index()
    {
        $arr = (new categoryModel())->getAllCategory();

        require 'view/category/index.php';
    }
}
