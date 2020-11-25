<?php
define("VIEWS_ROUTE", ROOT."views/");
define("CONTROLLERS_ROUTE", ROOT."controllers/");
define("ASSETS_ROUTE", ROOT."assets/");
define("LIB_ROUTE", ROOT."lib/");


require 'Router.php';
require 'Route.php';
require CONTROLLERS_ROUTE."/User.php";
require CONTROLLERS_ROUTE."/Institution.php";
include CONTROLLERS_ROUTE."/template.php";
//include ROOT."models/Session.php";
include 'models/User.php';
include 'models/Institution.php';
include_once "models/conexion.php";

session_start();
