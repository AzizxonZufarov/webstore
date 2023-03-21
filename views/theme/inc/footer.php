<div id="templatemo_footer">
  <div class="col col_16">
      <h4>Categories</h4>
        <ul class="footer_menu">
          <? foreach($categories as $cat){?>
          <li><a href="?view=cats&id=<?=$cat['id']?>"><?=$cat['name']?></a></li>

            <? }?>
  </ul>
    </div>
    <div class="col col_16">
      <h4>Pages</h4>
        <ul class="footer_menu">
          <li><a href="?view=index" class="selected">Home</a></li>
					<li><a href="?view=about">About</a></li>
					<li><a href="?view=faqs">FAQs</a></li>
					<li><a href="?view=contact">Contact</a></li>
  </ul>
    </div>

    <div class="col col_16">
      <h4>Social</h4>
        <ul class="footer_menu">
          <li><a href="http://www.twitter.com">Twitter</a></li>
            <li><a href="http://www.facebook.com">Facebook</a></li>
            <li><a href="http://www.youtube.com">Youtube</a></li>
            <li><a href="http://www.linkedin.com">LinkedIn</a></li>
  </ul>
    </div>
    <div class="col col_13 no_margin_right">
      <h4>About Us</h4>
        <p>Web Store -это интернет магазин,где Вы найдете товары для мужчин, женщин, детей и спорттовары</p>
    </div>

    <div class="cleaner h40"></div>
<center>
  Copyright © <?php echo(date("Y"));?>  <a href="http://testcoder.uz">testcoder.uz</a> |
      <a href="http://testcoder.uz" target="_parent">Webstore</a>
</center>
</div> <!-- END of footer -->

</div>
<script type="text/javascript" src="<?=THEME?>js/jquery-3.5.1.min.js"></script>

<script>
	
	


</script>
<script type="text/javascript" src="<?=THEME?>js/main.js" ></script>
<script type="text/javascript" src="<?=THEME?>js/bootstrap.min.js" ></script>
<script type="text/javascript" src="<?=THEME?>js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>


<script language="javascript" type="text/javascript" src="<?=THEME?>scripts/mootools-1.2.1-core.js"></script>
<script language="javascript" type="text/javascript" src="<?=THEME?>scripts/mootools-1.2-more.js"></script>
<script language="javascript" type="text/javascript" src="<?=THEME?>scripts/slideitmoo-1.1.js"></script>
<script language="javascript" type="text/javascript">
	window.addEvents({
		'domready': function(){
			/* thumbnails example , div containers */
			new SlideItMoo({
						overallContainer: 'SlideItMoo_outer',
						elementScrolled: 'SlideItMoo_inner',
						thumbsContainer: 'SlideItMoo_items',
						itemsVisible: 5,
						elemsSlide: 2,
						duration: 200,
						itemsSelector: '.SlideItMoo_element',
						itemWidth: 171,
						showControls:1});
		},

	});

	function clearText(field)
	{
		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
	}
		





		
</script>



</body>
</html>
