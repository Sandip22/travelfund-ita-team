<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Fly Now Pay Later and spread the cost of your holiday | Travelfund | Partners</title>
<meta name="description" content="TravelFund offers you the ability to Fly Now Pay Later by spreading the cost before and after you travel with a holiday loan" />
<link rel="stylesheet" href="/skin/common/css/foundation.css" />
<!-- calender Css-->
<link rel="stylesheet" type="text/css" href="/skin/common/css/jquery-ui-1.10.4/ui-lightness/jquery-ui.css" />
<link rel="stylesheet" href="/skin/common/css/styles.css" />
<script src="/skin/common/js/vendor/modernizr.js"></script>

<script type="text/javascript" src="/skin/common/js/jquery-1.11.0.min.js" ></script>
<script type="text/javascript" src="/skin/common/js/jquery-ui-1.10.4.custom.js" ></script>

<script type="text/javascript" src="/skin/common/js/travelfund.js" ></script><script type="text/javascript" src="/partner/widget/tf_app_travelpack.min.js?partner_code=Travel-Fund"></script>

<!-- Start Visual Website Optimizer Asynchronous Code -->
<script type='text/javascript'>
var _vwo_code=(function(){
var account_id=37923,
settings_tolerance=2000,
library_tolerance=2500,
use_existing_jquery=false,
// DO NOT EDIT BELOW THIS LINE
f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
</script>
<!-- End Visual Website Optimizer Asynchronous Code -->

<!-- Google Analytics Code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  //ga('create', 'UA-39785560-1', 'travelfund.co.uk');    ga('create', '<?php echo GOOGLE_TRACK_CODE ?>', '<?php echo GOOGLE_TRACK_URL ?>');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
<!-- End Google Analytics Code -->
</head>
<body>
<!-- #BeginLibraryItem "/Library/navbar.lbi" -->
<div class="contain-to-grid">
  <nav class="top-bar" data-topbar>
    <ul class="title-area">
      <li class="name">
        <h1><a href="<?php echo base_url();?>"><img src="/skin/common/img/interface_assets/travelfund_logo.png" alt="travelFund"></a></h1>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
    </ul>
    <section class="top-bar-section"> 
      <!-- Right Nav Section -->
      <ul class="right">
        <!--li><a href="<?php echo base_url();?>">HOME</a></li-->                <li><a onclick="travelfund_box('travelfund','application','');" href="#" id="travelfund" >APPLY</a></li>
        <li><a href="<?php echo base_url().'how/';?>">HOW IT WORKS</a></li>
        <li><a href="https://travelfund.zendesk.com">HELP</a></li>
        <li><a href="<?php echo base_url().'travelPartners/';?>">TRAVEL PARTNERS</a></li>
        <?php if(isset($_SESSION['customer_id']) && ($_SESSION['customer_id']!=""))
        { ?>
        <li><a href="<?php echo base_url().'customer/myaccount/authenticate';?>">MY ACCOUNT</a></li>
        <?php
        } else { ?>
        <li><a href="<?php echo base_url().'customer/myaccount';?>">MY ACCOUNT</a></li>
        <?php }?>
      </ul>
    </section>
  </nav>
</div>
<!-- #EndLibraryItem -->