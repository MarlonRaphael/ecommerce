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

require_once("functions.php");
require_once("site.php");
require_once("admin.php");
//require_once("admin-users.php");
require_once("admin-categories.php");
require_once("admin-products.php");
//require_once("admin-orders.php");

$app->run();