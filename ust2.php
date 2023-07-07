<header class="header_area menu_dark">
<div class="main_menu">
<a href="index"><img class="extra_logo" src="assets/images/logo.png" alt="Dom Yapı Dekorasyon Logosu"></a>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="index"><img src="assets/images/logo.png" alt="Dom Yapı Dekorasyon Logosu"></a>
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
