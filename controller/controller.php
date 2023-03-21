<?php
session_start();
include MODEL;

if(empty($_GET['view'])){
	$view = "index";
}else{
	$view = $_GET['view'];
}

$menu=menu();
$slider = slider();
$categories = categories();
$brands = brands();
$other_items=other_items();

switch($view){
case "index":
$items=items();
break;


case "cats":
$id = $_GET['id'];
$cats = cats($id);
break;


case "brands":
$id = $_GET['id'];
$brand_items = brand_items($id);
break;

case "detail":
$id = $_GET['id'];
$detail = detail($id);
$questions=questions();
if($_POST){
$chat=chat();
}
break;

case "addcart":
$id = $_GET['id'];
addcart($id);
header("location:?view=cart");
break;

case "deleteitem":
$id = $_GET['id'];
deleteitem($id);
header("location:?view=cart");
break;


case "addcartdown":
$id  = $_GET['id'];
addcartdown($id);
header("location:?view=cart");
break;


case "zakaz":
if($_POST){
zakaz();
header("location:?view=index");
}
break;

case "contact":
if($_POST){
contact();
header("location:?view=contact");
}
break;




case "reg":
if($_POST){
$reg=reg();
	header("location:?view=index");
}
break;

case 'auth':
if($_POST){
	auth();
}
break;


case 'cab':
$id = $_SESSION['id'];
$user = user($id);
break;


case 'deletecab':
deletecab($id);
break;


case 'editcab':
$id = $_SESSION['id'];
$user = user($id);
if($_POST){
updcab($id);
}
break;


case 'logout':
logout();
break;


}










include $_SERVER['DOCUMENT_ROOT']."/webstore/views/theme/index.php";
?>
