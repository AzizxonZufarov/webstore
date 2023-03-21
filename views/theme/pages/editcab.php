
<?php
session_start();
?>
			 <div id="contact_form">

				<form action="" method="post" enctype="multipart/form-data">

	 			    <label for="author">Name:</label>
                    <input type="text" value="<?=$user['name']?>" name="name"  />
                    <div class="cleaner_h10"></div>

                     <label for="email">Email:</label>
                    <input type="text" value="<?=$user['email']?>" name="email"/>
                    <div class="cleaner_h10"></div>

                    
                    <label for="password">password:</label>
                    <input type="text" value="<?=$user['password']?>" name="password"/>
                    <div class="cleaner_h10"></div>

               		<img src="regupl/<?= $user['img']?>" width="200px" height="200px"/><br />
                    <br /><input type="file" name="img" value="<?=$user['img']?>" />
                    <div class="cleaner_h10"></div>
                    
                    <input type="hidden" value="<?=$id?>" name="id" />
                    <div class="cleaner_h10"></div>
                    
                    <input type="submit" class="submit_btn" value="Send" />

				</form>

        </div>
