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
    
<script>
    var partner_url = "<?php echo $data['partner_url']; ?>";
</script>

<body on-contextmenu="return false;">
        <noscript>
            <meta HTTP-EQUIV="REFRESH" content="0; url=/application/show_javascript_msg"> 
        </noscript>
        <div id="main_container">
            <div class="row">
                <div class="large-12 medium-12 columns ">
                	<div class="row">
    
                    </div>         
                      <div class="row">
                                    <div class="large-2 medium-2 columns margintop">
                    <img src="/skin/common/images/logo.png" />       
                </div>
                <div class="large-10 medium-10 columns margintop2">
                <div class="row">
                                    <div class="large-12 medium-12 columns">
                    <h6>Your pre approved credit limit is &pound;<?php echo $data['AvailableBalance']; ?></h6>
                    </div>   
				</div>
                    <div class="row">
                        <div class="large-3 medium-3 columns"><h6>Card Number</h6></div>
                        <div class="large-3 medium-3 columns"><h6><?php echo $data['CardNumber']; ?></h6></div>
                        <div class="large-3 medium-3 columns"><h6>Expriry Date</small></div>
                        <div class="large-3 medium-3 columns"><h6><?php echo $data['Expiry']; ?></h6></div>
                    </div>
                    <div class="row">
                        <div class="large-3 medium-3 columns"><h6>Card Holders Name</h6></div>
                        <div class="large-3 medium-3 columns"><h6><?php echo $data['EmbossedName']; ?></h6></div>
                        <div class="large-3 medium-3 columns"><h6>Security Code</h6></div>
                        <div class="large-3 medium-3 columns"><h6><strong>Sent to your mobile</strong></h6></div>
                    </div>
                    <div class="row">
                        <div class="large-3 medium-3 columns">&nbsp;</div>
                        <div class="large-3 medium-3 columns">&nbsp;</div>
                        <div class="large-3 medium-3 columns">&nbsp;</div>
                        <div class="large-3 medium-3 columns"><a class="card_font" onclick="get_account_detail();"><h6><u>Didn't receive it?</u></h6></a>
                    </div>
                </div>
            </div>
        </div>   
    </body>
</html>
    <!--<div class="large-12 medium-12 columns">    
        <div class="large-2 medium-2 columns">&nbsp;</div>
        <div class="large-8 medium-8 columns">
            <button name="back_top_artner" it="back_top_partner" class='button radius' value="back_top_partner" onclick="travelfund_close();" >
                Back to <?php echo $data['partner_name'] ?>
            </button>
        </div>
        <div class="large-2 medium-2 columns">&nbsp;</div>
    </div>-->        
<script>

     function get_account_detail(){
         var ciurl='/application/get_card_details';
        //Get status from APS
        //Ajax request to get data.        
        var jqxhr = $.ajax({
                url:ciurl,
            })
          .done(function(data) {
              var oData = eval( '(' + data + ')' );
              
              if(typeof oData['CardNumber'] == undefined)
              {
                  alert('Fail to fetch card details');
                  return false;
              }
          })
          .fail(function() {
            alert( "Fail to fetch status from APS." );
          });
        return false;
    }
    
    function travelfund_close(){
        //Detect screen size.
        //if mobile then open in same screen.
        if(screen.width < 800){
            window.location = partner_url;
        }else{
            parent.location = partner_url;
        } 
    }
</script>