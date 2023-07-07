<?php include("admin/include/site_db.php"); ?> <!DOCTYPE html>
<html lang="tr">
<head>

<meta charset="utf-8"><?php include("favo.php")?>
<title><?=$db->VeriOkuTek("proje_category", "isim", "url", $_GET["url"]);?> - Dom Yapı Dekorasyon </title>

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
<h2 class="wow" data-splitting="">Dom Yapı<br> <span class="color"><?=$db->VeriOkuTek("proje_category", "isim", "url", $_GET["url"]);?></span>  </h2>
</div>
</div>
</section>
<section class="single_portfolio_area">
<img class="img-fluid" src="upload/<?=$db->VeriOkuTek("proje_category", "icresim", "url", $_GET["url"]);?>" alt="<?=$db->VeriOkuTek("proje_category", "isim", "url", $_GET["url"]);?>">
<div class="container">
<div class="single_p_text">
<p><?=$db->VeriOkuTek("proje_category", "aciklama", "url", $_GET["url"]);?></p>
</div>
</div>
</section> 
<section class="portfolio_area portfolio_masonry pb-174">
<div class="container">
<div class="row portfolio_inner"> 
<?php 
				                $cat_id = $db->VeriOkuTek("proje_category", "id", "url", $_GET["url"]);
if($db->veriSaydir("proje_items", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("proje_items", array("cat_id"), array($cat_id), "row", "ASC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
?> 
<div class="col-lg-4 arch building ext">
<div class="portfolio_item white wow fadeInUp" data-wow-delay="300ms">
<div class="portfolio_img gallery">
<img class="img-fluid" src="upload/<?=$rows->resim;?>" alt="<?=$db->VeriOkuTek("proje_category", "isim", "url", $_GET["url"]);?>">
</div>
<div class="portfolio_text">
<a class="light_btn gallery" href="upload/<?=$rows->resim;?>"><i class="linearicons-plus"></i></a>
</div>
</div>
</div>

<?php }} ?>
					  
					  
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
<script src="assets/vendors/slick/slick.min.js"></script>
<script src="assets/vendors/popup/jquery.magnific-popup.min.js"></script>
<script src="assets/vendors/isotop/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendors/isotop/isotope.pkgd.min.js"></script>
<script src="assets/vendors/splitting/splitting.min.js"></script>
<script src="assets/vendors/animsition-preloader/js/animsition.min.js"></script>
<script src="assets/js/theme.js"></script>

<script>
$('a').magnificPopup({
        type: 'image',
        closeBtnInside: false,
    closeOnContentClick: true,
  tLoading: '', // remove text from preloader
  
  /* don't add this part, it's just to disable cache on image and test loading indicator */
  callbacks: {
    beforeChange: function() {
     this.items[0].src = this.items[0].src + '?=' + Math.random(); 
    }
  }
  
  
    });


</script>

</body>
</html>