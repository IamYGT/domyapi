<?php include("admin/include/site_db.php"); ?> <!DOCTYPE html>
<html lang="tr">
<head>

<meta charset="utf-8"><?php include("favo.php")?>
<title>Kurumsal - Dom Yapı Dekorasyon </title>

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
<h2 class="wow" data-splitting="">Dom Yapı <br>Bizi daha <span class="color">yakından</span> tanıyın. </h2>
</div>
</div>
<div class="bg_img parallaxie" style="background: url(assets/images/about.jpg);"></div>
</section>


<section class="experience_design_area p-170">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-5">
<div class="media exp_title">
<div class="d-flex">
<h3 class="wow fadeIn" data-wow-delay="400ms"><?=$db->ayarlar("value" , "tecrube");?></h3>
</div>
<div class="media-body">
<h5 class="wow fadeInLeft" data-wow-delay="600ms">Yıllık<br>
 Tecrübe</h5>
</div>
</div>
</div>
<div class="col-lg-6 col-md-7">
<div class="exp_text media">
<div class="d-flex">
<i>“</i>
</div>
<div class="media-body">
<p class="wow fadeInUp" data-wow-delay="400ms"><?=$db->ayarlar("value" , "imza");?></p>
<img class="wow fadeInLeft" data-wow-delay="400ms" src="assets/images/signature.png" alt="Dom Yapı">
</div>
</div>
</div>
</div>
 <div class="exp_design_text pt-174">
<h2 style="    margin-bottom: 10px;    font-weight: 700;">Bizi daha <span>yakından</span> tanıyın.</h2>
<p>  <?=$db->ayarlar("value" , "kurumsal");?></p>
</div>
</div>
</section> 
</div>
<div class="height-emulator"></div>
<?php include("alt.php")?>
</div>


<script src="assets/js/jquery-3.5.1.min.js"></script>
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
<script src="assets/vendors/isotop/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendors/isotop/isotope.pkgd.min.js"></script>
<script src="assets/vendors/slick/slick.min.js"></script>
<script src="assets/vendors/popup/jquery.magnific-popup.min.js"></script>
<script src="assets/js/parallaxie.js"></script>
<script src="assets/vendors/splitting/splitting.min.js"></script>
<script src="assets/vendors/animsition-preloader/js/animsition.min.js"></script>
<script src="assets/js/theme.js"></script>
</body>
</html>