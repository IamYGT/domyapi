<?php include("admin/include/site_db.php"); ?> <!DOCTYPE html>
<html lang="tr">
<head>

<meta charset="utf-8"><?php include("favo.php")?><title>Hizmetlerimiz - Dom Yapı Dekorasyon </title>

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/vendors/linearicons/style.css">
<link rel="stylesheet" href="assets/vendors/linearicons-2/css/linearicons.css">

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
<h2 class="wow" data-splitting="">Dom Yapı <br><span class="color">Hizmetlerimiz </span>  
 </h2>
</div>
</div>
</section> 
<section class="blog_masonry_area pb-174">
<div class="portfolio_grid_inner row" id="masonry"> 
<?php
			if($db->veriSaydir("hizmetlerimiz", array(), array()) > 0) {
			$bilgi= $db->VeriOkuCoklu("hizmetlerimiz", array(), array(), "row", "ASC");
			$bilgial= $db->bilgial;
			foreach($bilgial as $rows){
			?> 
<div class="col-lg-6 col-md-4 col-sm-6">
<div class="portfolio_grid_item wow fadeInUp" data-wow-delay="300ms">
<div class="portfolio_img">
<a href="hizmet-<?=$rows->url;?>.html"> <img class="img-gluid" src="upload/<?=$rows->resim;?>" alt="<?=$rows->isim;?>"> </a>
<a class="light_btn" href="hizmet-<?=$rows->url;?>.html"><i class="linearicons-plus"></i></a>
</div>
<div class="portfolio_text">
 <a href="hizmet-<?=$rows->url;?>.html">
<h4><?=$rows->isim;?></h4>
</a>
</div>
</div>
</div> 
  <?php }} ?>
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
<script src="assets/vendors/animsition-preloader/js/animsition.min.js"></script>
<script src="assets/js/theme.js"></script>
</body>
</html>