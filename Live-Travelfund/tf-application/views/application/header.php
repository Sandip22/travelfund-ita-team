<!DOCTYPE html>
<!--[if lt IE 8]><html class="ie7"><![endif]-->
<!--[if IE 8]><html class="ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html>
    <!--<![endif]-->
    <head>
        <title>Fly Now Pay Later and spread the cost of your holiday | Travelfund | Partners</title>
        <meta name="description" content="TravelFund offers you the ability to Fly Now Pay Later by spreading the cost before and after you travel with a holiday loan" />
        <?php echo header('P3P:CP="IDC DSP COR ADM DEVi TAIi PSA PSD IVAi IVDi CONi HIS OUR IND CNT"'); ?>
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
       <!-- Tracking code travelfund.co.uk -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', '<?php echo GOOGLE_TRACK_CODE ?>', '<?php echo GOOGLE_TRACK_URL ?>');
          ga('send', 'pageview');

        </script>
        
        <script>
            //Prevent back.
            //Put dummy entry into history. 
            history.pushState({ page: 1 }, "title 1", "#nbb");
            window.onhashchange = function (event) {
                window.location.hash = "nbb";
            };
        </script>
        <!-- End Tracking code -->
        
        <?php
        //Show chat except follogin controller
        if($this->uri->segment(2)!="login" && $this->uri->segment(2)!="get_account_details") {
        ?>
        <!--Start of Zopim Live Chat Script-->
        <script type="text/javascript">
        window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
        d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
        $.src='//v2.zopim.com/?2ButrcXH4vkHTAAp0W7zUyX6Mlly9srL';z.t=+new Date;$.
        type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
        </script>
        <!--End of Zopim Live Chat Script-->
            
        <?php } //end?>
        
        
    </head>
    <?php
        if(ENVIRONMENT == "development" || ENVIRONMENT == "testing" ): 
    ?>
    <body oncontextmenu="return true;">
    <?php
        else: 
    ?>    
    <body oncontextmenu="return false;">
    <?php endif; ?>        
        <div id="is_ie_lt9"></div>
        <noscript>
            <meta HTTP-EQUIV="REFRESH" content="0; url=/application/show_javascript_msg"> 
        </noscript>
         
        <script type="text/javascript">
            
            var ie = (function(){

                var undef,
                    v = 3,
                    div = document.createElement('div'),
                    all = div.getElementsByTagName('i');
            
                while (
                    div.innerHTML = '<!--[if gt IE ' + (++v) + ']><i></i><![endif]-->',
                    all[0]
                );
            
                return v > 4 ? v : undef;
            
            }());

            $(document).ready(function(){
             
                 if(ie < 9){
                    alert("Your browser is not supported, please upgrade your browser or use a different browser.");
                 }
                 
                var cookieEnabled=(navigator.cookieEnabled)? true : false
            
                //if not IE4+ nor NS6+
                if (typeof navigator.cookieEnabled=="undefined" && !cookieEnabled){ 
                    document.cookie="testcookie"
                    cookieEnabled=(document.cookie.indexOf("testcookie")!=-1)? true : false
                }
                
                if(cookieEnabled == false){
                    alert('Cookie is disable. So please enable to apply for loan.');
                }
            });
        
            function open_window(type){
                //Display FAQ page.
                if(type=='faq'){
                    $( "#faq" ).dialog({
                        title: "",
                        height:400,
                        width : 600,
                        maxHeight : 400,
                        maxWidth : 600,
                        position:{ my: "left+50 top+75", at: "left top", of: "#main_container" } ,
                        open: function(event, ui) {
                            $('#faq').load('/application/faq');
                        }
                    });
                 }
                 else if(type=='display_security_privacy'){
                    $( "#popup_msg" ).dialog({
                        title: "Security & Privacy Statement",
                        height:700,
                        width : 600,
                        maxHeight : 880,
                        maxWidth : 864,
                        position:{ my: "center center", at: "center center", of: "#main_container" } ,
                        open: function(event, ui) {
                            $('#popup_msg').load('/application/display_security_privacy');
                        }
                    });
                 }
                 else if(type=='summary_terms_conditions'){
                    $( "#popup_msg" ).dialog({
                        title: "Summary Box Terms & Conditions",
                        height:700,
                        width : 600,
                        maxHeight : 880,
                        maxWidth : 864,
                        position:{ my: "center center", at: "center center", of: "#main_container" } ,
                        open: function(event, ui) {
                            $('#popup_msg').load('/application/summary_terms_conditions');
                        }
                    });
                 }
                 else if(type=='pre_contract_information'){
                    $( "#popup_msg" ).dialog({
                        title: "Pre Contract Information",
                        height:700,
                        width : 600,
                        maxHeight : 880,
                        maxWidth : 864,
                        position:{ my: "center center", at: "center center", of: "#main_container" } ,
                        open: function(event, ui) {
                            $('#popup_msg').load('/application/pre_contract_information');
                        }
                    });
                 }
                 else if(type=='eligibility_terms_conditions'){
                    $( "#popup_msg" ).dialog({
                        title: "",
                        height:480,
                        width : 600,
                        maxHeight : 880,
                        maxWidth : 864,
                        position:{ my: "center center", at: "center center", of: "#main_container" } ,
                        open: function(event, ui) {
                            $('#popup_msg').load('/application/eligibility_terms_conditions');
                        }
                    });
                 }
            }//fn
        </script> 
        <div id="main_container">     
        <div class="row">

            <div class="large-12 columns marginbottom">

                <div class="left">

                    <img src="/skin/common/images/logo.png" />    

                </div>

            </div>        

        </div>
