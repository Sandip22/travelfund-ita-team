<!DOCTYPE html>
<!--[if lt IE 8]><html class="ie7"><![endif]-->
<!--[if IE 8]><html class="ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html>
    <!--<![endif]-->
    <head>
        <?php echo header('P3P:CP="IDC DSP COR ADM DEVi TAIi PSA PSD IVAi IVDi CONi HIS OUR IND CNT"'); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="/skin/common/css/normalize-5.1.0.css" />
        <link rel="stylesheet" type="text/css" href="/skin/common/css/foundation-5.1.0.css" />
        <link rel="stylesheet" type="text/css" href="/skin/common/css/ui.jqgrid-4.6.0.css" />
        <link rel="stylesheet" type="text/css" href="/skin/common/css/jquery-ui-1.10.4/ui-lightness/jquery-ui.css" />
        
        <link rel="stylesheet" type="text/css" href="/skin/frontend/css/style.css" />
        
        <script type="text/javascript" src="/skin/common/js/jquery-1.11.0.min.js" ></script>
        <script type="text/javascript" src="/skin/common/js/jquery-ui-1.10.4.custom.js" ></script>
        <script type="text/javascript" src="/skin/common/js/demo.js"></script>
    </head>
    <body>
        <noscript>
            <meta HTTP-EQUIV="REFRESH" content="0; url=http:www.google.com"> 
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
                    alert('Cookied disable.So please enable it');
                }
            });
            
            function open_window(type){
                //Display FAQ page.
                if(type='faq'){
                    $( "#faq" ).dialog({
                        title: "Frequently Asked Questions",
                        Height:400,
                        Width : 300,
                        maxHeight : 400,
                        maxWidth : 300,
                        position:{ my: "left top", at: "left top", of: "#main_container"  } ,
                        open: function(event, ui) {
                            $('#faq').load('/application/faq');
                        }
                    });
                 }                                        
            }//fn
            
        </script>   
        
        <div id="main_container">     
        <div class="row">
            <div class="large-12 columns">
                <div class="right">
                    <img src="/skin/common/images/logo.png" />    
                </div>
            </div>        
        </div>