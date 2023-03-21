<?php

//print_r($_SESSION['cart']);

?>
<?php
session_start();
?>
<div style="float:right; width: 215px; margin-top: 20px;">

    <div class="continueshopping"><a href="?view=index" class="more">Continue Shopping</a></div>

</div>
            <div class="cleaner h10"></div>
<div>


<table width="700px" cellspacing="0" cellpadding="5">
                   	  <tr bgcolor="#CCCCCC">
                        	<th width="220" align="left">Image </th>
                        	<th width="180" align="left">Description </th>
                       	  	<th width="100" align="center">Quantity </th>
                        	<th width="60" align="right">Price </th>
                        	<th width="60" align="right">Total </th>
                        	<th width="90"> </th>

                      </tr>
<? foreach($_SESSION['cart'] as $id =>$qty){
	$pr = detail($id);
  $price=$pr['price']*$qty;
  $total +=$price;
	?>
			<tr >
            	<td><img src="<?=THEME . $pr['img']?>" width="200px" height="150px"/></td>
            	<td><?=$pr['name']?></td>

                <td align="center">
                    <a style="font-size:30px;" href="?view=addcartdown&id=<?=$pr['id']?>"> - </a>
                  <input  type="text" value="<?= $qty?>" style="width: 20px; text-align: right" />
                    <a  style="font-size:30px;" href="?view=addcart&id=<?=$pr['id']?>"> + </a>
                 </td>

                <td align="right">$<?=$pr['price']?> </td>
                <td align="right">$<?=$price?> </td>-->
                <td align="center"> <a href="?view=deleteitem&id=<?=$pr['id']?>"><img src="images/remove_x.gif" alt="remove" /><br />Remove</a> </td>
			</tr>

<?}?>
<tr>
  <td colspan="3" align="right"  height="40px">&nbsp;&nbsp;</td>
    <td align="right" style="background:#ccc; font-weight:bold"> Total </td>
    <td align="right" style="background:#ccc; font-weight:bold">$<?=$total?></td>
    <td style="background:#ccc; font-weight:bold"> </td>
</tr>
					</table>
</div>
        <div class="cleaner h50"></div>
          <h2>Checkout</h2>
            <h5><strong>BILLING DETAILS</strong></h5>
            <form action="" method="post">
            <div class="col col_15 checkout">
            <label>Your Name</label>
            <input type="text" name="name" placeholder="write your name...">
            <div class="cleaner h10"></div>
            <label>Email Address</label>
            <input type="email" name="email" placeholder="your email address...">
            <div class="cleaner h10"></div>
            <label>Your message</label>
            <div class="cleaner h10"></div>
            <textarea name="text" placeholder="your message..." rows="5" cols="50" ></textarea>

            </div>

            <div class="cleaner h50"></div>
            <h3>Shopping Cart</h3>
            <h4>TOTAL: <strong>$<?=$total?></strong></h4>
            <table style="border:1px solid #CCCCCC;" width="100%">
                <tr>
                    <td height="80px"> <img src="images/paypal.gif" alt="paypal" /></td>
                    <td width="400px;" style="padding: 0px 20px;">Recommended if you have a PayPal account. Fastest delivery time.
                    </td>
                    <td><input type="radio" value="paypal" name="paymethod" /> </td>
                </tr>
                <tr>
                    <td  height="80px"><img src="images/2co.gif" alt="paypal" />
                    </td>
                    <td  width="400px;" style="padding: 0px 20px;">2Checkout.com, Inc. is an authorized retailer of goods and services provided by Template-Guide.com. 2CheckOut accepts customer orders via online checks, Visa, MasterCard, Discover, American Express, Diners, JCB and debit cards with the Visa, Mastercard logo.
                    </td>
                    <td><input type="radio" value="2Checkout" name="paymethod" /> </td>
                </tr>
            </table>
            <div class="cleaner h10"></div>
             <input type="submit" name="submit" value="Заказать" class="btn btn-primary" />

</form>
