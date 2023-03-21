<div id="content">
  <h2>Product Details</h2>
    <div class="col col_13">
  <a  rel="lightbox[portfolio]" href="images/product/10_l.jpg" title="Lady Shoes"><img src="<?=THEME . $detail['img']?>" width="300px" height="200px" alt="1" /></a>
    </div>
    <div class="col col_13 no_margin_right">
        <table>
          <tr>
              <td height="30">Id:</td>
              <td><?=$detail['id']?></td>
          </tr>
           <tr>
              <td height="30">Name:</td>
              <td><?=$detail['name']?></td>
          </tr>
            <tr>
                <td height="30" width="160">Price:</td>
                <td>$<?=$detail['price']?></td>
            </tr>

            <tr><td height="30">Quantity</td><td><input type="text" value="1" style="width: 20px; text-align: right" /></td></tr>
        </table>
        <div class="cleaner h20"></div>
        <a href="?view=addcart&id=<?=$detail['id']?>" class="add_to_cart">Add to Cart</a>
</div>
    <div class="cleaner h30"></div>

    <h5><strong>Product Description</strong></h5>
    <p><?=$detail['description']?></p>






    <a href="#" class="more float_r support buttonPop open-popup">Написать службе поддержке</a>
			<div class="popup-bg">

					<div class="popup">
							<img class="close-popup" src="<?=THEME?>images/close.png" alt="">
							 <div class="form">
							<form action="" method="post">
									<label>Имя:</label>
									<input type="text" class="name" name="name" >
									 <br/>

				                     <label for="author">Questions:</label>
				                     <select class="question" name="question" >
				                     <?foreach($questions as $item){?>
				                     <option value="<?=$item['question']?>" ><?=$item['question']?></option>
				                    <?}?>
				                     </select>
				                     <br/>

									<label>Сообщение:</label>
									<textarea type="text" class="text" name="text"></textarea>
									 <br/>
									<label>ID товара:</label>
									<input type="text" class="item_id" name="item_id" >
 <br/>
									<input id="sub" value="Отправить сообщение" type="submit">
							</form>
							</div>
              <div class="image">
                <img src="<?=THEME?>images/loading2.gif">
              </div>
              <div class="msg">

              </div>
					</div>
			</div>











    <div class="cleaner h50"></div>

    <h4>Other Products</h4>
    <? foreach($other_items as $item){?>
  <div class="col col_14 product_gallery">
      	<a href="?view=detail&id=<?=$item['id']?>"><img src="<?=THEME . $item['img']?>" width="150px" height="100px" alt="1" /></a>
        <h3><?=$item['name']?></h3>
        <p class="product_price">$ <?=$item['price']?></p>
          <a href="?view=addcart&id=<?=$item['id']?>" class="add_to_cart">Add to Cart</a>
    </div>
<?}?>

    <a href="?view=index" class="more float_r">View all</a>

    <div class="cleaner"></div>
</div> <!-- END of content -->





//
<script>
/*$(document).ready(function($) {
$("#sub").click(function(e){
 	e.preventDefault();
  	var name = $('.name').val();
	var question = $('.question').val();
	var text = $('.text').val();
	var item_id = $('.item_id').val();
  $.ajax({
    type:"GET",
    url:"?view=check",
    data:{name: name, question:question, text:text, item_id:item_id},
    beforeSend:function(){
      loading();
    },
    success:function(res){
    //  msg();
    console.log(res);

    },
    error:function(){
      alert("Error")
    }
      });
  });



  function loading(){
      $("#img").show(3000);
  }

  function msg(){
        $(".form").hide();
        $("#img").hide();
      	$(".msg").html("Сообщение удачно отправлено!");
  }

});*/
</script>


























<style>
.button {
    color: #ffffff;
    font-size: 30px;
    margin: 0 auto;
    display: block;
    text-decoration: none;
    text-align: center;
    padding: 20px 50px;
    background: #36779A;
    max-width: 300px;
}

.popup-bg {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.8);
    display: none;
}

.popup {
    position: absolute;
    background: #ffffff;
    width: 400px;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    padding: 30px;
    padding-top: 60px;
}

.popup form {
    display: flex;
    flex-direction: column;
}

.popup form input {
    margin-bottom: 30px;
    height: 50px;
    font-size: 20px;
    border: 2px solid #000000;
}

.popup form input[type="submit"] {
    background: #000000;
    color: #ffffff;
    font-size: 24px;
}

.close-popup {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
}

.no-scroll {
    overflow-y: hidden;
}
</style>
