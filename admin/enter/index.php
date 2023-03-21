<?session_start();
		$con = mysqli_connect("localhost","root","","webstore");
		
		if($_POST){
		$name = $_POST['name'];
		$password = $_POST['password'];
		$res = mysqli_query($con,"SELECT * FROM users WHERE name = '$name'");
		$row = mysqli_fetch_assoc($res);
		
		
		if(mysqli_num_rows($res)>0){
		$_SESSION['admin'] = $row['id'];
		header("location:/admin");			
		}	
		
}
	?>	
	
	
	
	<div id="templatemo_main">

	     <div style="font-size: 24px; text-align: center;" >
	       <form  method="post" action="" >
	             <label>Name</label>
	             <input type="text" name="name" placeholder="Enter name"/>
	           <br />
	           <br />
	             <label>Password</label>
	             <input type="text" name="password"  placeholder="Enter Password"/>
	           <br />
	           <br />
	            <input type="submit" name="submit" value="Send" />
	       </form>

	     </div>
	</div>
