
 <?
 gettype($cats);
if (is_array($cats) || is_object($cats))
{
   foreach($cats as $cat){?>
     <div class="col col_14 product_gallery">
             <a href="?view=detail&id=<?=$cat['id']?>"><img src="<?=THEME . $cat['img']?>" width="150px" height="150px" alt="1" /></a>

               <h3><?=mb_substr(strip_tags($cat['name']), 0, 15, 'utf-8')?></h3>
               <p class="product_price">$ <?=$cat['price']?></p>
               <a href="?view=addcart&id=<?=$cat['id']?>" class="add_to_cart">Add to Cart</a>

           </div>
<?    }
  }
  else // If $myList was not an array, then this block is executed.
  {
    echo "Unfortunately, an error occured.";
  }
  ?>
