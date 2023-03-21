<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web Store Theme - Free CSS Templates</title>
<meta name="keywords" content="web store, free templates, website templates, CSS, HTML" />
<meta name="description" content="Web Store Theme - free CSS template provided by templatemo.com" />
<link href="<?=THEME?>css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?=THEME?>css/styles.css" />
<link rel="stylesheet" type="text/css" href="<?=THEME?>css/ddsmoothmenu.css" />



</head>

<body id="home">

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"><h1><a href="?view=index">Free CSS Templates</a></h1></div>

        <div id="header_right">
            <ul id="language">
                <li><a><img src="<?=THEME?>images/usa.png" alt="English" /></a></li>
                <li><a><img src="<?=THEME?>images/china.png" alt="Chinese" /></a></li>
                <li><a><img src="<?=THEME?>images/germany.png" alt="Germany" /></a></li>
                <li><a><img src="<?=THEME?>images/india.png" alt="Indian" /></a></li>
            </ul>
            <div class="cleaner"></div>
            <div id="templatemo_search">
                <form action="#" method="get">
                  <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
         </div> <!-- END -->
    </div> <!-- END of header -->

    <div id="templatemo_menu" class="ddsmoothmenu">
			<ul>
					<li><a href="?view=index" class="selected">Home</a></li>
					<li><a href="?view=index">Products</a></li>
					<li><a href="?view=about">About</a></li>
					<li><a href="?view=faqs">FAQs</a></li>
					<li><a href="?view=cart">Checkout</a></li>
					<li><a href="?view=contact">Contact</a></li>
					<? if($_SESSION['id']){?>


										 <li><a href="?view=cab">Cabinet</a></li>

<?}else{?>


							<li><a href="?view=reg">Registration</a></li>
							<li><a href="?view=auth">Authorization</a></li>

<?}?>

			</ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->

    <div id="templatemo_middle">
    	<img src="<?=THEME?>images/templatemo_image_01.png" alt="Image 01" />
    	<h1>Знакомство с Web Store</h1>
        <p><a href="?view=index" target="_parent">Web Store</a> -это интернет магазин,где  Вы найдете товары для мужчин, женщин, детей и спорттовары</p>
        <a href="?view=index" class="buy_now">Browse All Products</a>
    </div> <!-- END of middle -->
