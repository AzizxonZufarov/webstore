
//!isset($_SESSION)? session_start():'';
  #    ######### Выводим все ошибки ##########    #
  //ini_set('error_reporting', E_ALL & ~E_NOTICE);    #
  //ini_set('display_errors', -1);             #
  //ini_set('display_startup_errors', -1);        #
  //error_reporting(E_ALL & ~E_NOTICE);          #
  #    ######### Выводим все ошибки ##########    #
  
  
  
//error_reporting(E_ALL); // Error/Exception engine, always use E_ALL
//ini_set('ignore_repeated_errors', TRUE); // always use TRUE
//ini_set('log_errors', TRUE); // Error/Exception file logging engine.
//ini_set('error_log', '/errors.log'); // Logging file path
<?php
// PHP code for logging error into a given file

// error message to be logged
$error_message = "This is an error message!";

// path of the log file where errors need to be logged
$log_file = "./my-errors.log";

// setting error logging to be active
ini_set("log_errors", TRUE);

// setting the logging file in php.ini
ini_set('error_log', $log_file);

// logging the error
error_log($error_message);

?>


		<?

		include "inc/header.php";?>

		<div id="templatemo_main_top"></div>
    <div id="templatemo_main">
	<? //include "inc/slider.php";?>

	<? include "inc/left.php";?>

        <div id="content">
<?
include $_SERVER['DOCUMENT_ROOT']."/webstore/views/theme/pages/{$view}.php";
?>

</div> <!-- END of content -->
<div class="cleaner"></div>
</div> <!-- END of main -->


 <? include "inc/footer.php";?>
