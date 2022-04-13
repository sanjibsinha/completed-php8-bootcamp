<?php

$router = [

    "/" => "index.php",
    "/about" => "about.php"

];

class Router
{

    public $array = [];
    public $url;
    public $destination;
    function __construct($array)
    {
        $this->array = $array;
    }

    function redirect($url, $destination)
    {
        $this->url = $url;
        $this->destination = $destination;

        if (array_key_exists($this->url, $this->array)) {

            return $this->array["{$this->url}"];
        } else {

            return FALSE;
        }
    }
}
$route = new Router($router);
echo $route->redirect("/", "index.php");

// index.php
