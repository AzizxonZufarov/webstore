<?

function items(){

	global $con;

	$res = mysqli_query($con,"SELECT * FROM items");


	$arr = [];

	while($row = mysqli_fetch_assoc($res)){

		$arr[] = $row;

	}
	return $arr;


}
function menu(){

	global $con;

	$res = mysqli_query($con,"SELECT * FROM menu");


	$arr = [];

	while($row = mysqli_fetch_assoc($res)){

		$arr[] = $row;

	}
	return $arr;


}

function slider(){

	global $con;

	$res = mysqli_query($con,"SELECT * FROM items");


	$arr = [];

	while($row = mysqli_fetch_assoc($res)){

		$arr[] = $row;

	}
	return $arr;


}

function categories(){
	global $con;
	$res = mysqli_query($con,"SELECT * FROM category");
	$arr = [];
	while($row = mysqli_fetch_assoc($res)){
		$arr[] = $row;
	}
	return $arr;
}

function cats($id){
	global $con;
	$res = mysqli_query($con,"SELECT * FROM items WHERE cat_id = $id");
	$arr = [];
	while($row = mysqli_fetch_assoc($res)){
		$arr[] = $row;
	}
	return $arr;
}



function brands(){
	global $con;
	$res = mysqli_query($con,"SELECT * FROM brands ");
	$arr = [];
	while($row = mysqli_fetch_assoc($res)){
		$arr[] = $row;
	}
	return $arr;
}

function brand_items($id){
	global $con;
	$res = mysqli_query($con,"SELECT * FROM items WHERE brand_id = $id ");
	$arr = [];
	while($row = mysqli_fetch_assoc($res)){
		$arr[] = $row;
	}
	return $arr;
}


function addcart($id){


	if($_SESSION['cart'][$id]){

		$_SESSION['cart'][$id] ++;

	}
	else{


		$_SESSION['cart'][$id] = 1;
	}


}

function deleteitem($id){
if($_SESSION['cart'][$id])
{
	 unset($_SESSION['cart'][$id]);
}
}

function addcartdown($id){


	if($_SESSION['cart'][$id] and $_SESSION['cart'][$id] > 1){

		$_SESSION['cart'][$id]--;

	}else{


		$_SESSION['cart'][$id] = 1;
	}


}

function zakaz(){
	global $con;
	if($_SESSION['id']){

	    $id = $_SESSION['id'];
	    $res = mysqli_query($con,"SELECT * FROM users WHERE id= $id");
	    $row = mysqli_fetch_assoc($res);
	    $name = $row['name'];
	    $email	= $row['email'];

	}else{
	    $name	=$_POST['name'];
	    $email	=$_POST['email'];
	}
	    $text = $_POST['text'];

	foreach($_SESSION['cart'] as $id => $qty){
	$res1 = mysqli_query($con,"SELECT * FROM `items` WHERE `id` = '$id' ");
	$row1 = mysqli_fetch_assoc($res1);
	$itemname=$row1['name'];
	$price=$row1['price'];
	$qnt=$qty;
	$item_summ_total=$price * $qnt;
	$paymethod=$_POST['paymethod'];
	$res2 = mysqli_query($con,"INSERT INTO zakaz (name, email, text, itemname, price, quantity, total, paymethod) VALUES('$name', '$email', '$text', '$itemname', '$price', '$qnt', '$item_summ_total', '$paymethod')");

	}
	unset($_SESSION['cart']);
}


function contact(){
	global $con;
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$res = mysqli_query($con,"INSERT INTO contact (name,email,subject,message)VALUES('$name','$email','$subject','$message')");
}







function other_items(){

	global $con;

	$res = mysqli_query($con,"SELECT * FROM items ORDER BY RAND() LIMIT 3");


	$arr = [];

	while($row = mysqli_fetch_assoc($res)){

		$arr[] = $row;

	}
	return $arr;


}


function detail($id){
	global $con;
	$res = mysqli_query($con,"SELECT * FROM items WHERE id = $id");
	$row = mysqli_fetch_assoc($res);
	return $row;

}

function chat(){
	global $con;
	$id=$_SESSION['id'];
	$question = $_POST['question'];
	$message = $_POST['text'];
	$name = $_POST['name'];
	$item_id = $_POST['item_id'];
	$res = mysqli_query($con,"INSERT INTO chat (from_user, to_user, question, message, isAdmin, name, item_id)VALUES($id, 1, '$question','$message', 0, '$name', '$item_id')");
}

function questions(){
	global $con;
	$res = mysqli_query($con,"SELECT * FROM questions");
	$arr = [];
	while($row = mysqli_fetch_assoc($res)){
	$arr[] = $row;
	}
	return $arr;
}




function reg(){

	global $con;
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$img = $_FILES['img']['name'];

	move_uploaded_file($_FILES['img']['tmp_name'],"regupl/".$img);

	$res = mysqli_query($con,"INSERT INTO users (name,email,password,img)VALUES('$name','$email','$password','$img')");


}




function auth(){
		global $con;
		$name = $_POST['name'];
		$password = $_POST['password'];
		$res = mysqli_query($con,"SELECT * FROM users WHERE name = '$name' AND password = '$password' ");
		if(mysqli_num_rows($res)>0){
			$row = mysqli_fetch_assoc($res);
			$_SESSION['id'] = $row['id'];

			header("location:?view=cab&id=$id");
		}
		else{

			header("location:?view=auth");
		}
	return $row;
}

function user($id){
		if(!empty($_SESSION['id'])){
			global $con;
			$res = mysqli_query($con,"SELECT * FROM users  WHERE id = $id ");
			$row = mysqli_fetch_assoc($res);
				return $row;
		}
		else{

			header("location:?view=index");
		}

}


function updcab($id){
		global $con;
	$id = $_POST['id'];

	$name = $_POST['name'];

	$email = $_POST['email'];

	$password = $_POST['password'];

	$img = $_FILES['img']['name'];



if($_FILES['img']['name'] != NULL){
	$res = mysqli_query($con, "SELECT * FROM users WHERE id = $id");
	$row  = mysqli_fetch_assoc($res);
	$old = $row['img'];
    unlink("regupl/".$old);
	move_uploaded_file($_FILES['img']['tmp_name'],"regupl/".$img);
	$res = mysqli_query($con,"UPDATE users SET name = '$name', email = '$email', password = '$password', img = '$img' WHERE id = $id");

	header("location:?view=cab");
	}else{
		$res = mysqli_query($con,"UPDATE users SET name = '$name', email = '$email', password = '$password', img = '$img' WHERE id = $id");
	header("location:?view=cab");

	}
}



function logout(){
	unset($_SESSION['id']);
header("location:?view=index");
}


function deletecab(){
		global $con;
			$id = $_SESSION['id'];
$res = mysqli_query($con,"DELETE  FROM users WHERE id = $id");
	unset($_SESSION['id']);
header("location:?view=index");
}
