<?php
define("PATH","http://localhost/webstore/");
define("CONTR","controller/controller.php");
define("MODEL","model/model.php");
define("THEME",PATH."views/theme/");

global $con;
$con = mysqli_connect("localhost","root","","webstore");

?>
