<header class="header_area home_page">
<div class="home_logo">
<img src="assets/images/logo2.png" alt="Dom Yapı Logosu">
<div class="slide-number">
<span class="current-number text-primary">0<span class="count"></span></span>
<sup><span class="delimiter">/</span> 0<span class="total-count">0</span></sup>
</div>
<ul class="nav">
<li class="active"><a href="<?=$db->ayarlar("value" , "facebook");?>">FB</a></li>
<li><a href="<?=$db->ayarlar("value" , "twitter");?>">TW.</a></li>
<li><a href="<?=$db->ayarlar("value" , "instagram");?>">IG.</a></li>
</ul>
</div>
<div class="main_menu">
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="index">
<img src="assets/images/logo-beyaz.png" alt="Dom Yapı Logosu">
 <img src="assets/images/logo.png" alt="Dom Yapı Logosu"> 
</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="nav navbar-nav ml-auto">
<li><a href="index">Anasayfa</a></li>
<li><a href="kurumsal">Kurumsal</a></li>
 <li class="dropdown submenu">
<a href="hizmetlerimiz">Hizmetlerimiz</a>
<i class="fa fa-angle-down mobile_dropdown" aria-hidden="true" data-toggle="dropdown"></i>
<ul class="dropdown-menu">
<?php
			if($db->veriSaydir("hizmetlerimiz", array(), array()) > 0) {
			$bilgi= $db->VeriOkuCoklu("hizmetlerimiz", array(), array(), "row", "ASC");
			$bilgial= $db->bilgial;
			foreach($bilgial as $rows){
			?> 
 <li><a href="hizmet-<?=$rows->url;?>.html"><?=$rows->isim;?></a></li>
 <?php }} ?>
</ul>
</li>
<li><a href="projeler">Projelerimiz</a></li>
<li><a href="blog">Blog</a></li>
 
<li  ><a href="iletisim">İletişim</a></li>
</ul>
</div>
</nav>
</div>
</div>
</header>