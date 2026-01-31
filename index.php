<?php
require_once 'vendor/autoload.php';

use App\Controllers\ProductController;

$page = $_GET['page'] ?? 'product-list';
$productController = new ProductController();
switch ($page) {
    case 'product-list':   $productController->index(); break;
    case 'product-add':    $productController->create(); break;
    case 'product-store':  $productController->store(); break;
    case 'product-edit':   $productController->edit(); break;
    case 'product-update': $productController->update(); break;
    case 'product-detail': $productController->detail(); break;
    case 'product-delete': $productController->destroy(); break;
    default: echo "404 Not Found"; break;
}