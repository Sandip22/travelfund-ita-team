<!DOCTYPE html>
<!--[if lt IE 8]><html class="ie7"><![endif]-->
<!--[if IE 8]><html class="ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="/skin/common/css/normalize-5.1.0.css" />
<link rel="stylesheet" type="text/css" href="/skin/common/css/foundation-5.1.0.css" />
<link rel="stylesheet" type="text/css" href="/skin/common/css/ui.jqgrid-4.6.0.css" />
<link rel="stylesheet" type="text/css" href="/skin/common/css/jquery-ui-1.10.4/ui-lightness/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="/skin/frontend/css/style.css" />
<script type="text/javascript" src="/skin/common/js/jquery-1.11.0.min.js" ></script>
<script type="text/javascript" src="/skin/common/js/jquery-ui-1.10.4.custom.js" ></script>
<script type="text/javascript" src="/skin/common/js/travelfund.js" ></script>
<script type="text/javascript" src="/skin/common/js/demo.js"></script>
<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          //ga('create', 'UA-39785560-1', 'travelfund.co.uk');
          ga('create', '<?php echo GOOGLE_TRACK_CODE ?>', '<?php echo GOOGLE_TRACK_URL ?>');
          ga('send', 'pageview');
        
        </script>

</head>
<body oncontextmenu="return false;">
<noscript>
<meta HTTP-EQUIV="REFRESH" content="0; url=/application/show_javascript_msg">
</noscript>
<div id="main_container">
  <div class="row">
    <div class="large-12 medium-12 columns"> <?php echo form_open(base_url() . 'application/authenticate', array(
                        'name' => 'login_detail',
                        'id' => 'login_detail',
                        'autocomplete'=>'off',
                        ));
                    ?>
      <div class="row">
        <div class="large-2 medium-2 columns margintop"> <img src="/skin/common/images/logo.png" /> </div>
        <div class="large-2 medium-2 columns">
          <label for="email" class="left inline">
          <h6>Email</h6>
          </label>
        </div>
        <div class="large-6 medium-6 columns end" >
          <input type="text" id="email" name="email">
          <?php echo form_error("email"); ?> </div>
      </div>
      <div class="row">
        <div class="large-2 medium-2 columns">&nbsp;</div>
        <div class="large-2 medium-2 columns">
          <label for="password" class="left inline">
          <h6>Password</h6>
          </label>
        </div>
        <div class="large-6 medium-6 columns end" >
          <input type="password" id="password" name="password">
          <?php echo form_error("password"); ?> <?php echo form_error("invalide_credentials"); ?> </div>
        <div class="large-2 medium-2 columns" style="margin-top:5px;">
          <button name="submit" id="submit" type="submit" class='button radius'  style="min-height:30px; font-size:14px;"value="login">Login</button>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
</div>
</body>
</html>