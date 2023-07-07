<?php include("admin/include/site_db.php"); ?> <!DOCTYPE html>
<html lang="tr">
<head>

<meta charset="utf-8"><?php include("favo.php")?>
<title>İletişim - Dom Yapı Dekorasyon </title>

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/vendors/linearicons/style.css">

<link href="assets/vendors/revolution/css/settings.css" rel="stylesheet">
<link href="assets/vendors/revolution/css/layers.css" rel="stylesheet">
<link href="assets/vendors/revolution/css/navigation.css" rel="stylesheet">

<link rel="stylesheet" href="assets/vendors/animate-css/animate.css">
<link rel="stylesheet" href="assets/vendors/slick/slick.css">
<link rel="stylesheet" href="assets/vendors/popup/magnific-popup.css">
<link rel="stylesheet" href="assets/vendors/splitting/splitting.css">
<link rel="stylesheet" href="assets/vendors/animsition-preloader/css/animsition.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body data-scroll-animation="true" class="loading">
<div class="animsition">
<div class="body_wrapper">
<?php include("ust2.php")?>
<section class="about_img_area">
<div class="container">
<div class="main_title">
<h2 class="wow" data-splitting="">Bizi daha yakından tanıyın.<br>Hemen <span class="color">İletişime </span> geçin. 
 </h2>
</div>
</div>
</section> 
<div id="mapBox2" class="mapBox" data-lat="41.071032" data-lon="28.665452" data-zoom="16" data-marker="#" data-info="<?=$db->ayarlar("value" , "adres");?>" data-mlat="41.071032" data-mlon="28.665452">
</div>


<section class="contact_page_area p-170">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div style="    margin-bottom: 25px;"  class="main_title">
<h2 class="wow" data-splitting="">İstanbul, <span class="color">Bahçeşehir</span></h2>
</div>
<div class="contact_details">

<ul class="nav flex-column">
 <li> <span>Adres:</span> <?=$db->ayarlar("value" , "adres");?>  </li> 
 <li><a href="tel:<?=$db->ayarlar("value" , "tel2");?>"><span>Umut Fadıl SEVER:</span> <?=$db->ayarlar("value" , "tel2");?></a></li> 
 <li>
<span>Sosyal Medya: </span>
<a href="<?=$db->ayarlar("value" , "facebook");?>"><i class="fa fa-facebook"></i></a>
<a href="<?=$db->ayarlar("value" , "twitter");?>"><i class="fa fa-twitter"></i></a>
<a href="<?=$db->ayarlar("value" , "instagram");?>"><i class="fa fa-instagram"></i></a>
<a href="<?=$db->ayarlar("value" , "whatsapp");?>"><i class="fa fa-whatsapp"></i></a>
</li>
<li> <span>Çalışma Saatleri:</span> <?=$db->ayarlar("value" , "calisma");?> </li>
</ul>
</div>
</div>
<div class="col-lg-6">
<div class="main_title">
<h2 class="wow" data-splitting="">İletişim Formu</h2>
</div>
<form class="contact_form row" action="#" method="post" id="contactForm" novalidate="novalidate">
<div class="input-group col-md-12">
<input type="text" class="form-control" id="name" name="name" placeholder="İsminiz">
</div>
<div class="input-group col-md-12">
<input type="text" class="form-control" id="email" name="email" placeholder="Eposta *">
</div>
<div class="input-group col-md-12">
<input type="text" class="form-control" id="subject" name="subject" placeholder="Konu">
</div>
<div class="input-group col-md-12">
<textarea class="form-control" name="message" id="message" rows="1" placeholder="Mesajınız"></textarea>
</div>
<div class="input-group col-md-12">
<button type="submit" value="submit" class="btn submit_btn">GÖNDER</button>
</div>
</form>
</div>
</div>
</div>
</section>

</div>
<div class="height-emulator"></div>
<?php include("alt.php")?>
</div>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

<script src="assets/vendors/animate-css/wow.min.js"></script>
<script src="assets/vendors/slick/slick.min.js"></script>
<script src="assets/vendors/popup/jquery.magnific-popup.min.js"></script>
<script src="assets/vendors/isotop/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendors/isotop/isotope.pkgd.min.js"></script>
<script src="assets/vendors/splitting/splitting.min.js"></script>
<script src="assets/vendors/animsition-preloader/js/animsition.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEQhXdvO2Yz16kSBaeBzLt7wWRkECXmlg"></script>
<script src="assets/js/gmaps.min.js"></script>
<script src="assets/js/map-active.js"></script>
<script src="assets/js/theme.js"></script>
</body>
</html>