<?php include("admin/include/site_db.php"); ?> <!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="utf-8"><?php include("favo.php")?><title>Anasayfa - Dom Yapı Dekorasyon </title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/vendors/linearicons/style.css">
 <meta name='description' content='Dom Yapı İtalyan Boya, Kartonpiyer Motif ve Asma Tavan Sistemlerinde Usta Eller 
 Dom Yapı Dekorasyon da sizlere hizmet vermekten gurur duyar.'>
 <meta name='keywords' content='dom yapı,dom yapı dekorasyon,italyan boya,kartonpiyer motif,asma tavan,asma tavan sistemleri,patina boya,alçıpan,ferforje demir'>
 <meta name='author' content='Kasko Yapı Dekorasyon'>
 <meta property='og:locale' content='tr_TR'>
 <meta property='og:type' content='website'>
 <meta property='og:title' content='Dom Yapı Dekorasyon - İtalyan Boya | Kartonpiyer Motif | Asma Tavan Sistemleri '>
 <meta property='og:description' content='Dom Yapı İtalyan Boya, Kartonpiyer Motif ve Asma Tavan Sistemlerinde Usta Eller 
 Dom Yapı Dekorasyon da sizlere hizmet vermekten gurur duyar.'>
 <meta property='og:url' content='http://domyapi.com/'>
 <meta property='og:site_name' content='Kasko Yapı Dekorasyon'>
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
<?php include("ust.php")?>
<section class="main_slider_area">
<div id="main_slider1" class="rev_slider" data-version="5.3.1.6">
<ul>
<?php
			if($db->veriSaydir("slayt", array(), array()) > 0) {
			$bilgi= $db->VeriOkuCoklu("slayt", array(), array(), "row", "ASC");
			$bilgial= $db->bilgial;
			foreach($bilgial as $rows){
			?>
<li data-index="rs-<?=$rows->id;?>" data-transition="slotzoom-horizontal" data-slotamount="8" data-masterspeed="1000" data-fsmasterspeed="1000">
<img src="upload/<?=$rows->resim;?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina="">
<div class="slider_text_box">
<div class="tp-caption tp-resizeme tag_text" data-x="['left','left','15','15','15']" data-hoffset="['0','0','0','0']" data-y="['center','center','center','top']" data-voffset="['-165','-165','-165','100','90']" data-fontsize="['20','20','20','20',20']" data-lineheight="['20','20','20','20','20']" data-width="['620','620','620','480','450']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-textalign="['left','left','left','left']">
Dom Yapı
</div>
<div class="tp-caption tp-resizeme first_text" data-x="['left','left','15','15','15']" data-hoffset="['0','0','0','0']" data-y="['center','center','center','top']" data-voffset="['-30','-3','-30','150','135']" data-fontsize="['80','80','80','40','40']" data-lineheight="['90','90','90','50','50']" data-width="['1000','1000','1000','1000','1000']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-textalign="['left','left','left','left']">
<?=$rows->baslik1;?>
</div>
<div class="tp-caption tp-resizeme secand_text" data-x="['right','right','right','15','15']" data-hoffset="['0','0','0','0']" data-y="['center','center','center','top']" data-voffset="['180','180','180','290','270']" data-fontsize="['16','16','16','16','16']" data-lineheight="['26','26','26','26','26']" data-width="['385','385','385','600','400']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textalign="['left','left','left','left']">
<?=$rows->baslik2;?>
</div>
<div class="tp-caption tp-resizeme br_s_text" data-x="['right','right','right','15','15']" data-hoffset="['70','70','70','0']" data-y="['center','center','center','top']" data-voffset="['132','132','130','270','250']" data-fontsize="['16','16','16','16','16']" data-lineheight="['26','26','26','26','26']" data-width="['385','385','385','600','400']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textalign="['left','left','left','left']">
<div class="br_s"></div>
</div>
<div class="tp-caption tp-resizeme slider_button" data-x="['left','left','15','15','15']" data-hoffset="['0','0','0','0']" data-y="['center','center','center','top']" data-voffset="['200','200','200','410','410']" data-fontsize="['14','14','14','14']" data-lineheight="['46','46','46','46']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
<a class="arrow_btn" href="<?=$rows->buton_link;?>"><?=$rows->buton_isim;?> <i class="lnr lnr-chevron-right"></i></a>
</div>
</div>
</li>
<?php }} ?>
</ul>
</div>
</section>
<section class="who_we_area pt-174">
<div class="container">
<div class="row">
<div class="col-lg-7 col-md-7">
<div class="who_we_text">
<div class="main_title">
<h2 class="wow" data-splitting=""><span class="color">Dom Yapı <br></span> Bizi daha yakından tanıyın.</h2>
</div>
<p class="wow fadeInUp" data-wow-delay="400ms"><?=$db->ayarlar("value" , "kurumsal");?>
</p>
<a class="arrow_btn" href="kurumsal">Kurumsal <i class="lnr lnr-chevron-right"></i></a>
</div>
</div>
<div class="col-lg-5 col-md-5">
<div class="who_we_img">
<img class="img-fluid wow fadeIn" data-wow-delay="500ms" src="assets/images/who-we.jpg" alt="">
</div>
</div>
</div>
</div>
</section> 
<section class="latest_project_area pt-174">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="main_title">
<h2 class="wow" data-splitting=""><span class="color">Son</span> Projeler</h2>
</div>
</div> 
</div>
</div>
<div class="left">
</div>
<div class="right">
<div class="latest_slider">
<?php
			if($db->veriSaydir("proje_category", array(), array()) > 0) {
			$bilgi= $db->VeriOkuCoklu("proje_category", array(), array(), "row", "ASC");
			$bilgial= $db->bilgial;
			foreach($bilgial as $rows){
			?> 
<div class="item">
<div class="l_project_item">
<a href="proje-<?=$rows->url;?>.html"> <img src="upload/<?=$rows->icresim;?>" alt="<?=$rows->isim;?>"> </a>
<div class="l_project_text d-flex justify-content-between">
<div class="left_text">
<h6>Dom Yapı</h6>
<a href="proje-<?=$rows->url;?>.html"> <h4><?=$rows->isim;?></h4> </a>
</div> 
</div>
</div>
</div>
 <?php }} ?> 
</div>
</div>
</section>
<section class="latest_news_area pb-174">
<div class="container">
<div class="main_title">
<h2 class="wow" data-splitting=""><span class="color">Dom Yapı</span> <br> Blog</h2>
</div>
<div class="latest_news_inner row justify-content-center">
<?php
			if($db->veriSaydir("blog", array(), array()) > 0) {
			$bilgi= $db->VeriOkuCoklu("blog", array(), array(), "row", "ASC",2);
			$bilgial= $db->bilgial;
			foreach($bilgial as $rows){
			?> 
<div class="col-lg-6 col-md-6">
<div class="l_news_item wow fadeInUp" data-wow-delay="300ms">
<div class="l_news_img">
<img class="img-fluid" src="upload/<?=$rows->resim;?>" alt="<?=$rows->isim;?>">
</div>
<div class="flipbox_text">
<h5><?=$rows->tarih;?></h5>
<a href="blog-<?=$rows->url;?>.html">
<h4><?=$rows->isim;?></h4>
 </a> 
<a class="arrow_btn" href="blog-<?=$rows->url;?>.html">Devamını Oku <i class="lnr lnr-chevron-right"></i></a>
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
<script src="assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/vendors/animate-css/wow.min.js"></script>
<script src="assets/vendors/isotop/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendors/slick/slick.min.js"></script>
<script src="assets/vendors/popup/jquery.magnific-popup.min.js"></script>
<script src="assets/vendors/splitting/splitting.min.js"></script>
<script src="assets/vendors/animsition-preloader/js/animsition.min.js"></script>
<script src="assets/js/theme.js"></script>
</body>
</html>