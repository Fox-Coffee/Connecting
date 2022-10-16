<?php
    spl_autoload_register('load');
    function load($name){
        /*$path = 'classes/'.$name.'.class.php';
        include_once $path;*/
        include_once 'classes/'.$name.'.class.php';
    }