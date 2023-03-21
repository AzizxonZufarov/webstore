<?php
session_start();

if(!$_SESSION['admin']){
	header("location:/admin/enter/");
}

include MODEL;

    if(empty($_GET['view'])){
		$view = "index";
	}else{
		$view = $_GET['view'];
	}

$unread_messages=unread_messages();
$detail=detail();


switch($view){
	case "index":
		$orders_count=orders_count();
		$users_count=users_count();
		$items_count=items_count();
		$visitors=visitors();
		$messages=messages();
		$detail=detail();
	/*		$id = $_SESSION['id'];
	if($_POST){
		postreply($id);
		}*/
	//echo '<pre>';
	//	print_r($userIsset);
	//	echo '</pre>';
		break;

	case "deletemessage":
		$id = $_GET['id'];
		deletemessage($id);
		break;

	case "categories":
		$categories=categories();
		break;

	case "addcat":
		if($_POST){
		 addcat();
		}
	break;

	case "editcat":
		$id = $_GET['id'];
		$editcat = editcat($id);
		if($_POST){
		updcat($id);
	}
	break;

	case "dellcat":
		dellcat($id);
		header("location:?view=categories");
	break;

	case "comments":
		$comments=comments();
	break;

	case "addcomment":
			$categories=categories();
		if($_POST){
		 addcomment();
		}
	break;

	case "editcomment":
		$id = $_GET['id'];
		$categories=categories();
		$editcomment = editcomment($id);
		if($_POST){
		updcomment($id);
		}
	break;


	case "dellcomment":
		dellcomment($id);
	break;

	case "confirm":
		confirm($id);
	break;

	case "unconfirm":
		unconfirm($id);
	break;

	case "users":
		$users = users();
	break;

	case "adduser":
		if($_POST){
		 adduser();
		}
	break;

	case "delluser":
	delluser($id);
	break;

	case "edituser":
	$id = $_GET['id'];
	$edituser = edituser($id);
	if($_POST){
	upduser($id);
	}
	break;

	case "setopened":
		$id = $_GET['id'];
		setopened($id);
		break;

	case "items":
		$items = items();
	break;

	case "additem":
			$categories=categories();
			$brands=brands();
		if($_POST){
		 additem();
		}
	break;


	case "dellitem":
		dellitem($id);
	break;

	case "edititem":
	$id = $_GET['id'];
	$edititem = edititem($id);
	$categories=categories();
	$brands=brands();
	if($_POST){
	upditem($id);
	}
	break;


	case "orders":
		$orders = orders();
	break;


	case "dellorder":
		dellorder($id);
	break;

	case "user_orders":
	$id = $_GET['id'];
	$user_orders = user_orders($id);
	break;


	case "ship":
		ship($id);
	break;

	case "unship":
		unship($id);
	break;


	case "editorder":
	$id = $_GET['id'];
	$editorder = editorder($id);
	if($_POST){
	updorder($id);
	}
	break;

}



include $_SERVER['DOCUMENT_ROOT']."/admin/views/theme/index.php";

/*case "addcat":
		if($_POST){
		$addcat = addcat();
		}
	break;*/?>
