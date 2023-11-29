<?php
require 'model/model.php';
require 'controller/controllerProduct.php';
require 'controller/controllerAdmin.php';
require 'controller/controllerCategory.php';

$action = $_GET['action'] ?? 'index';
$controllerAdmin = $_GET['controllerAdmin'] ?? 'base';

switch ($controllerAdmin) {
    case 'base':
        (new ControllerAdmin())->menuAdmin();
        break;
    case 'product':
        switch ($action) {
            case 'index':
            case 'createProduct':
            case 'editProduct':
            case 'storeProduct':
            case 'updateProduct':
            case 'deleteProduct':
                (new controllerProduct())->$action();
                break;
            default:
                echo 'FPI warning';
                break;
        }
        break;
    case 'category':
        switch ($action) {
            case 'index':
            case 'createCategory':
            case 'storeCategory':
            case 'editCategory':
            case 'updateCategory':
            case 'deleteCategory':
                (new controllerCategory())->$action();
                break;
            default:
                echo 'FPI warning';
                break;
        }
        break;
    default:
        echo 'error';
        break;
}

?>
