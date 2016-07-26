<?php
/**
 * Created by PhpStorm.
 * User: Murat Saygılı
 * Date: 13.7.2016
 * Time: 10:31
 *
 * Fonksiyonların bulunduğu depo
 */
require_once 'config.php';

$user = "";

if (array_key_exists ( "user", $_SESSION )) {
    $user = $_SESSION ['user'];
}

function getHead($title)
{
    $string="
    
    ";
    return $string;
}

function getHeader(){
    $string="
    
    ";
    return $string;
}

function getMenu(){
    return "
    
    ";
}
function getFooter(){
    return "
    
    ";
}