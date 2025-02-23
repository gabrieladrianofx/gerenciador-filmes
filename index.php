<?php

require 'functions.php';
require 'dados.php';

$controller = 'index';

if(isset($_SERVER['PATH_INFO'])) {
    $controller = str_replace('/', '', parse_url( $_SERVER['PATH_INFO'])['path']);
}

require "controllers/{$controller}.controller.php";