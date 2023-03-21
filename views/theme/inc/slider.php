<div id="product_slider">
  <div id="SlideItMoo_outer">
          <div id="SlideItMoo_inner">
              <div id="SlideItMoo_items">

            <? foreach($slider as $item){?>
                      <div class="SlideItMoo_element">
                                <a href="http://www.templatemo.com/page/1" target="_parent">
                                <img src="<?=THEME.$item['img']?>" width="160px" height="120px" alt="product 1" /></a>
                        </div>

                 		<?}?>


              </div>
          </div>
      </div>
      <div class="cleaner"></div>
  </div>
