
<footer class="footer_area">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-4 col-sm-4 col-5">
<aside class="f_widget logo_wd">
<img src="assets/images/logo.png" alt="">
</aside>
</div>
<div class="col-lg-3 col-md-4 col-sm-4 col-7">
<aside class="f_widget copyright_wd">
<p>© Dom Yapı. 2020<br>
Her Hakkı Saklıdır</p><br>
<p>Tasarım & Kodlama:<br>
<a style="    color: #eed442;" href="https://www.memsidea.com">  Memsidea </a></p>
</aside>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-4">
<aside class="f_widget list_wd">
<ul class="nav flex-column">
<li><a href="index">Anasayfa</a></li>
<li><a href="kurumsal">Kurumsal</a></li>
<li><a href="projeler">Projeler</a></li>
<li><a href="blog">Blog</a></li>
<li><a href="iletisim">İletişim</a></li>
</ul>
</aside>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-4">
<aside class="f_widget list_wd">
<ul class="nav flex-column">
<?php
			if($db->veriSaydir("proje_category", array(), array()) > 0) {
			$bilgi= $db->VeriOkuCoklu("proje_category", array(), array(), "row", "ASC",5);
			$bilgial= $db->bilgial;
			foreach($bilgial as $rows){
			?>
			  
 <li><a href="proje-<?=$rows->url;?>.html"><?=$rows->isim;?></a></li>
   <?php }} ?>
</ul>
</aside>
</div>
<div class="col-lg-2 col-md-4 col-sm-4 col-4">
<aside class="f_widget list_wd">
<ul class="nav flex-column">
<li><a href="<?=$db->ayarlar("value" , "facebook");?>">Facebook</a></li>
<li><a href="<?=$db->ayarlar("value" , "instagram");?>">İnstagram</a></li>
<li><a href="<?=$db->ayarlar("value" , "twitter");?>">Twitter</a></li>
<li><a href="http://wa.me/<?=$db->ayarlar("value" , "whatsapp");?>">Whatsapp</a></li>
</ul>
</aside>
</div>
</div>
</div>
</footer>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d1b56187a48df6da2429071/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->