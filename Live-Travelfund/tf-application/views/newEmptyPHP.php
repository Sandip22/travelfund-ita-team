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
	</head>
	<body>
		<noscript>
			<meta HTTP-EQUIV="REFRESH" content="0; url=http:www.google.com">
		</noscript>
		<script>
		    function scroll_to_tag(id)
            {
                $("html, body").animate({
                    scrollTop: $("#" + id).offset().top - ($("#fixed-top").height()+50)
                }, 500);
                return false;
            }
		</script>

		<div id="main_container" class="main_container">
			<div class="row">
				<div class="large-12 columns">
				    <div class="row">
				        <div class="large-6 medium 6 columns">
				            <img src="/skin/common/images/logo.png" />
			            </div>
			            <div class="large-6 medium 6 columns">
			                <?php echo form_open(base_url() . 'customer/myaccount/authenticate', array(
                            'name' => 'personal_detail',
                            'id' => 'personal_detail'
                            ));
                            ?>
			                <div class="row" style="padding-top:10px;">
			                    <div class="large-4 medium 4 columns">
			                        <input type="text" id="email" name="email" class="radius" placeholder="Email">
		                        </div>
			                    <div class="large-4 medium 4 columns">
			                        <input style="margin-bottom:5px;" type="password" id="password" name="password" class="radius" placeholder="Password">
			                        <small><a style="margin-bottom:5px;">Reset Password</a></small>
			                    </div>
			                    <div class="large-4 medium 4 columns">
			                        <button  name="submit" it="submit" type="submit" class='button expand tiny radius right'  value="login" >
			                            Login
		                            </button>
	                            </div>
			                </div>
                            </form>
			            </div>
				    </div>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<div class="top-nav color-bg-alt-2 color-text-alt-3">
					    <div class="row">
					        <div class="large-4 medium-4 columns" style="padding: 25px;">
				               <a href="javascript: void(0);" onclick="scroll_to_tag('how_it_works');" class="color-text-alt-3 text-strong no-line text-large">How does it work?</a>
                            </div>				               
					        <div class="large-4 medium-4 columns" style="padding: 25px;">
				               <a href="javascript: void(0);" onclick="scroll_to_tag('what_it_costs');" class="color-text-alt-3 text-strong no-line text-large">What does it cost?</a>
			                </div>
					        <div class="large-4 medium-4 columns" style="padding: 25px;">
					           <a href="javascript: void(0);" onclick="scroll_to_tag('how_to_apply');" class="color-text-alt-3 text-strong no-line text-large">How do I apply?</a>    
					        </div>
					    </div>
					</div>
				</div>
			</div>
			
      