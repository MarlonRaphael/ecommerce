<?php 

session_start();
require_once("vendor/autoload.php");

use Hcode\Model\Product;
use Hcode\Model\Category;
use Hcode\Model\User;
use Hcode\Page;
use Hcode\PageAdmin;
use Slim\Slim;

$app = new Slim();

$app->config('debug', true);

require_once('site.php');
require_once('admin.php');
require_once('admin-user.php');
require_once('admin-categories.php');
require_once('admin-products.php');
require_once('functions.php');

$app->get('/', function() {

    $products = Product::listAll();

    $page = new Page();

    $page->setTpl("index", [
        'products' => Product::checkList($products)
    ]);

});

$app->get('/categories/:idcategory', function ($idcategory){

    $category = new Category();

    $category->get((int)$idcategory);

    $page = new PageAdmin();

    $page->setTpl("category", [
        'category' => $category->getValues(),
        'products' => []
    ]);

});

$app->run();

 ?>