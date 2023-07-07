<?php include("admin/include/site_db.php"); ?> <!DOCTYPE html>
<html lang="tr">
<head>

<meta charset="utf-8"><?php include("favo.php")?>
<title><?=$db->VeriOkuTek("blog", "isim", "url", $_GET["url"]);?> - Dom Yapı Dekorasyon </title>

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

<section  class="about_img_area">
<div class="container">
<div class="main_title">
<h5>Dom Yapı</h5>
<h2 class="wow" data-splitting>  <?=$db->VeriOkuTek("blog", "isim", "url", $_GET["url"]);?></h2>
</div>
</div>
<div class="bg_img" style=" height: 428px; background: url(upload/<?=$db->VeriOkuTek("blog", "resim", "url", $_GET["url"]);?>) no-repeat; 
        background-size: cover;">
</div>
</section> 
<section style="padding: 48px 0;" class="blog_single_area">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="blog_details_info p_right">
<div style=" margin-bottom: 15px;" class="post_date"><span>Dom Yapı</span> & <?=$db->VeriOkuTek("blog", "tarih", "url", $_GET["url"]);?></div>
<h2  style=" margin-bottom: 5px;" class="blog_single_title"><?=$db->VeriOkuTek("blog", "isim", "url", $_GET["url"]);?></h2>
<p><?=$db->VeriOkuTek("blog", "aciklama", "url", $_GET["url"]);?></p>
  
<div class="post_share">
Paylaş:
<ul class="nav share_link">
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
</ul>
</div>
</div>
</div>
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
<script src="assets/vendors/splitting/splitting.min.js"></script>
<script src="assets/js/parallaxie.js"></script>
<script src="assets/vendors/animsition-preloader/js/animsition.min.js"></script>
<script src="assets/js/theme.js"></script>
</body>
</html>