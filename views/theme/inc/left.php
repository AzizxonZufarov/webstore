<div id="sidebar">
  <h3>Categories</h3>
    <ul class="sidebar_menu">

  <? foreach($categories as $cat){?>
  <li><a class="cats" data-id="<?=$cat['id']?>" href="?view=cats&id=<?=$cat['id']?>"><?=$cat['name']?></a></li>
    <?
  }?>
</ul>

  <h3>Brands</h3>
    <ul class="sidebar_menu">

  <? foreach($brands as $brand){?>
  <li><a class="brands" data-id="<?=$brand['id']?>" href="?view=brands&id=<?=$brand['id']?>"><?=$brand['name']?></a></li>

    <? }?>
</ul>
    <h3>Подписка</h3>
    <p>Подписывайтесь на рассылки</p>
    <div id="newsletter">
        <form action="#" method="get">
          <input type="text" value="Subscribe" name="email_newsletter" id="email_newsletter" title="email_newsletter" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
          <input type="submit" name="subscribe" value="Subscribe" alt="Subscribe" id="subscribebtn" title="Subscribe" class="subscribebtn"  />
        </form>
        <div class="cleaner"></div>
    </div>
</div> <!-- END of sidebar -->

<script>

/*
	window.onload = function()
	{
	if (window.jQuery)
	{
	alert('jQuery is loaded');
	}
	else
	{
	alert('jQuery is not loaded');
	}
	}
*/
</script>
