<?php
session_start();
include '';
include '';
include '';
$pages = scandir("pages/");

if (isset($_POST['p'])
AND !empty($_POST['p'])
AND in_array($_POST['p'].".php", $pages)){

    $page=$_POST['p'].".php";
}else{
    $page="";
}
