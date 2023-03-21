
<? foreach($items as $item){?>
     	<div class="col col_14 product_gallery">
            	<a href="?view=detail&id=<?=$item['id']?>"><img src="<?=THEME . $item['img']?>" width="150px" height="150px" alt="1" /></a>

                <h3><?=mb_substr(strip_tags($item['name']), 0, 15, 'utf-8')?></h3>
                <p class="product_price">$ <?=$item['price']?></p>
                <a href="?view=addcart&id=<?=$item['id']?>" class="add_to_cart">Add to Cart</a>

            </div>
     <?}?>
    <div class="cat-items">
<?include "?view=cats&id=$id" ?>
            </div>
