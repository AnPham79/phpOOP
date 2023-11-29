<?php

class controllerCategory
{
    public function index()
    {
        $arr = (new categoryModel())->getAllCategory();

        require 'view/category/index.php';
    }

    public function createCategory() {
        require 'view/category/createCategory.php';
    }

    public function storeCategory() {
        $name_category = $_POST['name_category'];

        (new categoryModel())->createCategory($name_category);
    }

    public function editCategory() {
        $id_category = $_GET['id_category'];

        $each = (new categoryModel())->findCategory($id_category);

        require 'view/category/editCategory.php';
    }

    public function updateCategory() {
        $id_category = $_POST['id_category'];
        $name_category = $_POST['name_category'];

        (new categoryModel())->updateCategory($id_category, $name_category);
    }

    public function deleteCategory() {
        $id_category = $_GET['id_category'];

        (new categoryModel()) -> deleteCategory($id_category);
    }
}
