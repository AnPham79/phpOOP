<?php

class controllerProduct {
    public function index() {
        $arr = (new productModel())->getAllProduct();

        require 'view/product/index.php';
    }

    public function createProduct() {
        require 'view/product/createProduct.php';
    }

    public function storeProduct() {
        $name_product = $_POST['name_product'];
        $photo_product = $_POST['photo_product'];
        $price_product = $_POST['price_product'];
        $description_product = $_POST['description_product'];

        (new ProductModel())->createProduct($name_product, $photo_product, $price_product, $description_product);
    }

    public function editProduct() {
        $id_product = $_GET['id_product'];

        $each = (new ProductModel())->findProduct($id_product);

        require 'view/product/editProduct.php';
    }

    public function updateProduct() {
        $id_product = $_POST['id_product'];
        $name_product = $_POST['name_product'];
        $photo_product = $_POST['photo_product'];
        $price_product = $_POST['price_product'];
        $description_product = $_POST['description_product'];

        (new ProductModel())->updateProduct($id_product, $name_product, $photo_product, $price_product, $description_product);
    }

    public function deleteProduct() {
        $id_product = $_GET['id_product'];

        (new ProductModel())->deleteProduct($id_product);
    }
}
?>