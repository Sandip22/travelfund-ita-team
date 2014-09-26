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
        
          //ga('create', 'UA-49995733-1', 'travelfund.co.uk');
          ga('create', '<?php echo GOOGLE_TRACK_CODE ?>', '<?php echo GOOGLE_TRACK_URL ?>');
          ga('send', 'pageview');
        
        </script>
        
    </head>
    
<script>
    var partner_url = "<?php echo $data['partner_url']; ?>";
</script>

<body on-contextmenu="return false;">
    <noscript>
        <meta HTTP-EQUIV="REFRESH" content="0; url=/application/show_javascript_msg"> 
    </noscript>

    <div id="main_container">
        <?php
        //Header of page.
        //require 'header.php';
        
        $parter_name = $data['partner_name'];
        $partner_url = $data['partner_url'];
        
        ?>
        <script>var partner_url =  "<?php echo $partner_url; ?>";</script>
        <div class="row">
          <div class="large-12 columns">
            <div class="large-12 medium-12 columns ">
              <div class="row">
                <div class="large-12 columns margintop2 marginbottom">
                  <div class="large-12 columns marginbottom text-center">
                    <h1 class="decline_msg" >We're Sorry...</h1>
                  </div>
                  <div class="large-12 medium-12 columns text-center">
                    <h5 class="decline_msg">Your drawdown period has expired. Please log in at <a class="decline_msg" target="_blank"  href="https://www.travelfund.co.uk">www.travelfund.co.uk</a> to manage your account.</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
   </body>
</html>