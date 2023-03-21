<?
function 	orders_count(){
	global $con;
	$res = mysqli_query($con,"SELECT COUNT('id') AS 'total' from zakaz");
	$row = mysqli_fetch_assoc($res);
	$total = $row['total'];
	return $total;
}

function 	users_count(){
	global $con;
	$res = mysqli_query($con,"SELECT COUNT('id') AS 'total' from users");
	$row = mysqli_fetch_assoc($res);
	$total = $row['total'];
	return $total;
}

function 	items_count(){
	global $con;
	$res = mysqli_query($con,"SELECT COUNT('id') AS 'total' from items");
	$row = mysqli_fetch_assoc($res);
	$total = $row['total'];
	return $total;
}

function 	visitors(){
	global $con;
	$res = mysqli_query($con,"SELECT COUNT('id') AS 'total' from visitors");
	$row = mysqli_fetch_assoc($res);
	$total = $row['total'];
	return $total;
}

function 	categories(){
	global $con;
	$res = mysqli_query($con,"SELECT * FROM category");
	$arr = [];
	while($row = mysqli_fetch_assoc($res)){
	$arr[] = $row;
	}
	return $arr;
}

function 	brands(){
	global $con;
	$res = mysqli_query($con,"SELECT * FROM brands");
	$arr = [];
	while($row = mysqli_fetch_assoc($res)){
	$arr[] = $row;
	}
	return $arr;
}

function addcat(){
	global $con;
	$category = $_POST['category'];
	$res = mysqli_query($con,"SELECT * FROM category WHERE name= '$category' ");
	if(mysqli_num_rows($res)>0){

 $_SESSION['res'] = '<p style="color:red">Has category</p>';
	 header("location:?view=addcat");
	}
	else{
		$res2 = mysqli_query($con,"INSERT INTO category (name) VALUES('$category')");
 header("location:?view=categories");

	}

}

function editcat($id){
	global $con;
	$res = mysqli_query($con,"SELECT * FROM category WHERE id = $id");
	$row = mysqli_fetch_assoc($res);
	return $row;
	header("location:?view=categories");
}

function updcat($id){
	global $con;
	$category=$_POST['category'];
	$res = mysqli_query($con,"UPDATE category SET name = '$category' WHERE id = $id");
	header("location:?view=categories");
}

function dellcat($id){
	global $con;
		$id = $_GET['id'];
	$res = mysqli_query($con,"DELETE FROM category WHERE id = $id");
	header("location:?view=categories");

}

function messages(){
	global $con;
	$res = mysqli_query($con,"SELECT *  FROM chat  WHERE isAdmin!=1");
	$arr = [];
	while($row = mysqli_fetch_assoc($res)){
	$arr[] = $row;
	}
	return $arr;
}

function unread_messages(){
	global $con;
	$res = mysqli_query($con,"SELECT COUNT('id') AS 'total' FROM chat  WHERE isAdmin!=1 AND opened=0");
	$row = mysqli_fetch_assoc($res);
	$total = $row['total'];
	return $total;
}

function setopened($id){
	global $con;
	$res = mysqli_query($con,"UPDATE chat SET opened = 1 WHERE id = $id");
	header("location:?view=index");
}

function detail(){
	global $con;
	$res = mysqli_query($con,"SELECT DISTINCT * FROM chat WHERE isAdmin!=1 AND opened=0 ORDER BY sent DESC LIMIT 10 ");
	$arr = [];
	while($row = mysqli_fetch_assoc($res)){
	$arr[] = $row;
	}
	return $arr;
}

function deletemessage($id){
	global $con;
	$res = mysqli_query($con,"DELETE * FROM chat WHERE id = $id");
}

/*
function postreply($id){
	global $con;
	$res1 = mysqli_query($con,"SELECT * FROM users WHERE id = $id");
	$row1 = mysqli_fetch_assoc($res1);
	$from_id = $_SESSION['id'];
	$name = $row1['name'];
	$message = $_POST['message'];
	$res2 = mysqli_query($con,"INSERT INTO chat (from_user, to_user, message, isAdmin, name)VALUES($from_id, $id, '$message', 1, '$name')");
}*/

function 	comments(){
	global $con;
	$res = mysqli_query($con,"SELECT * FROM comments");
	$arr = [];
	while($row = mysqli_fetch_assoc($res)){
	$arr[] = $row;
	}
	return $arr;
}

function addcomment(){
	global $con;

	$author = $_POST['author'];

	$text = $_POST['text'];

	$email = $_POST['email'];

	$category = $_POST['category'];

	$res = mysqli_query($con,"INSERT INTO comments (author, text, email, cat_id) VALUES('$author', '$text', '$email', '$category')");
header("location:?view=comments");
}

function editcomment($id){
	global $con;
	$res = mysqli_query($con,"SELECT * FROM comments WHERE id = $id");
	$row = mysqli_fetch_assoc($res);
	return $row;
}

function updcomment($id){
	global $con;

	$author = $_POST['author'];

	$date = $_POST['date'];

	$text = $_POST['text'];

	$email = $_POST['email'];

	$category = $_POST['category'];

	$status = $_POST['status'];

	$res = mysqli_query($con,"UPDATE comments SET author = '$author', date = '$date', text = '$text', email = '$email', cat_id = $category, status = $status WHERE id = $id");

header("location:?view=comments");
}




function dellcomment($id){
	global $con;
	$id = $_GET['id'];
	$res = mysqli_query($con,"DELETE FROM comments WHERE id = $id");

header("location:?view=comments");
}

function confirm($id){
	global $con;
	$id = $_GET['id'];
	$res = mysqli_query($con,"UPDATE comments SET status = 1 WHERE id = $id");
header("location:?view=comments");
}

function unconfirm($id){
	global $con;
	$id = $_GET['id'];
	$res = mysqli_query($con,"UPDATE comments SET status = 0 WHERE id = $id");
header("location:?view=comments");
}

function 	users(){
	global $con;
	$res = mysqli_query($con,"SELECT * FROM users");
	$arr = [];
	while($row = mysqli_fetch_assoc($res)){
	$arr[] = $row;
	}
	return $arr;
}

function adduser(){
	global $con;
	$name = $_POST['name'];

	$password = $_POST['password'];

	$email = $_POST['email'];

	$img = $_FILES['img']['name'];
$isadmin = $_POST['isadmin'];
	$res = mysqli_query($con,"SELECT * FROM users WHERE name= '$name' ");

if(mysqli_num_rows($res)<=0){
	$res2 = mysqli_query($con,"INSERT INTO users (name,email,password, img,isAdmin) VALUES('$name','$email','$password','$img',$isadmin)");

}

header("location:?view=users");

}

function edituser($id){
global $con;
$res = mysqli_query($con,"SELECT * FROM users WHERE id = $id");
$row = mysqli_fetch_assoc($res);
return $row;
}

function upduser($id){
	global $con;
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$img = $_FILES['img']['name'];
	$isadmin = $_POST['isadmin'];
	if($_FILES['img']['name'] != NULL){
	$res = mysqli_query($con, "SELECT * FROM users WHERE id = $id");
	$row  = mysqli_fetch_assoc($res);
	$old = $row['img'];
	unlink("regupl/".$old);
	move_uploaded_file($_FILES['img']['tmp_name'],"regupl/".$img);
	$res = mysqli_query($con,"UPDATE users SET name = '$name', email = '$email', password = '$password', img = '$img', isAdmin = $isadmin WHERE id = $id");
	header("location:?view=users");
	}else{
	$res = mysqli_query($con,"UPDATE users SET name = '$name', email = '$email', password = '$password', img = '$img', isAdmin = $isadmin WHERE id = $id");
	header("location:?view=users");
	}
	}

	function delluser($id){
		global $con;
		$id = $_GET['id'];
		$res = mysqli_query($con,"DELETE FROM users WHERE id = $id");
		header("location:?view=users");
	}

function items(){
	global $con;
	$res = mysqli_query($con,"SELECT * FROM items");
	$arr = [];
	while($row = mysqli_fetch_assoc($res)){
	$arr[] = $row;
	}
	return $arr;
}

function additem(){
	global $con;
	$name = $_POST['name'];

	$price = $_POST['price'];

	$cat_id = $_POST['cat_id'];

	$brand_id = $_POST['brand_id'];

	$img = $_FILES['img']['name'];
$description = $_POST['description'];

	$res = mysqli_query($con,"SELECT * FROM items WHERE name= '$name' ");

if(mysqli_num_rows($res)<=0){
	$res2 = mysqli_query($con,"INSERT INTO items (name,price,cat_id, brand_id,img, description) VALUES('$name','$price',$cat_id,$brand_id,'$img','$description')");

}

header("location:?view=items");

}

function dellitem($id){
	global $con;
	$id = $_GET['id'];
	$res = mysqli_query($con,"DELETE FROM items WHERE id = $id");
	header("location:?view=items");
}

function edititem($id){
global $con;
$res = mysqli_query($con,"SELECT * FROM items WHERE id = $id");
$row = mysqli_fetch_assoc($res);
return $row;
}


function orders(){
	global $con;
	$res = mysqli_query($con,"SELECT * FROM zakaz");
	$arr = [];
	while($row = mysqli_fetch_assoc($res)){
	$arr[] = $row;
	}
	return $arr;
}


function dellorder($id){
	global $con;
	$id = $_GET['id'];
	$res = mysqli_query($con,"DELETE FROM zakaz WHERE id = $id");
	header("location:?view=orders");
}


function user_orders($id){
	global $con;
	$res = mysqli_query($con,"SELECT * FROM zakaz WHERE user_id = $id");
	$arr = [];
	while($row = mysqli_fetch_assoc($res)){
	$arr[] = $row;
	}
	return $arr;
}


function ship($id){
	global $con;
	$id = $_GET['id'];
	$res = mysqli_query($con,"UPDATE zakaz SET shipped = 1 WHERE id = $id");
header("location:?view=orders");
}

function unship($id){
	global $con;
	$id = $_GET['id'];
	$res = mysqli_query($con,"UPDATE zakaz SET shipped = 0 WHERE id = $id");
header("location:?view=orders");
}


function editorder($id){
	global $con;
	$res = mysqli_query($con,"SELECT * FROM zakaz WHERE id = $id");
	$row = mysqli_fetch_assoc($res);
	return $row;
}


/*
function replies(){
	global $con;
	$res = mysqli_query($con,"SELECT * FROM (SELECT name, text, date, isAdmin FROM replies
		UNION SELECT name, text, date, isAdmin  FROM supportmessage)t ORDER BY date");
	$arr = [];
	while($row = mysqli_fetch_assoc($res)){
	$arr[] = $row;
	}

	return $arr;
}
*/
