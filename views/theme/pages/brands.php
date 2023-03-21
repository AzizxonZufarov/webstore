    <div class="brand-items">
 <?

        foreach($brand_items as $brand){?>
          <div class="col col_14 product_gallery">
                	<a href="?view=detail&id=<?=$brand['id']?>"><img src="<?=THEME . $brand['img']?>" width="150px" height="150px" alt="1" /></a>

                    <h3><?=mb_substr(strip_tags($brand['name']), 0, 15, 'utf-8')?></h3>
                    <p class="product_price">$ <?=$brand['price']?></p>
                    <a href="?view=addcart&id=<?=$brand['id']?>" class="add_to_cart">Add to Cart</a>

                </div>


<? }?>
  </div>
