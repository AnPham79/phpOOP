<?php

class controllerProduct {
    public function index() {
        $arr = (new productModel())->getAllProduct();

        require 'view/product/index.php';
    }

    public function createProduct() {
        $arr = (new categoryModel)->getAllCategory();

        require 'view/product/createProduct.php';
    }

    public function storeProduct() {
        $name_product = $_POST['name_product'];
        $photo_product = $_POST['photo_product'];
        $price_product = $_POST['price_product'];
        $description_product = $_POST['description_product'];
        $FK_id_category = $_POST['FK_id_category'];

        (new ProductModel())->createProduct($name_product, $photo_product, $price_product, $description_product, $FK_id_category);
    }

    public function editProduct() {
        $id_product = $_GET['id_product'];

        $each = (new ProductModel())->findProduct($id_product);

        $arr = (new categoryModel())->getAllCategory();

        require 'view/product/editProduct.php';
    }

    public function updateProduct() {
        $id_product = $_POST['id_product'];
        $FK_id_category = $_POST['FK_id_category'];
        $name_product = $_POST['name_product'];
        $photo_product = $_POST['photo_product'];
        $price_product = $_POST['price_product'];
        $description_product = $_POST['description_product'];

        (new ProductModel())->updateProduct($id_product, $FK_id_category, $name_product, $photo_product, $price_product, $description_product);
    }

    public function deleteProduct() {
        $id_product = $_GET['id_product'];

        (new ProductModel())->deleteProduct($id_product);
    }
}
?>