<?php
//Header of page.
require 'header.php';
$CI = &get_instance();
$parter_name = $CI->session->userdata('partner_name');
?>
<div class="row">

    <div class="large-12 medium-12 columns">

        <div class="row">

                <div class="large-12 medium-12 columns">

                <div class="panel" style="background: #26C2E8">
                <div class="row">
                <img style="display: block; margin: 0 auto;" src="/skin/common/images/application_processing.gif" />
                
                                <div class="large-12 medium-12 columns text-center margintop marginbottom">
       			<img src="/skin/common/images/interface assets/horizontal_divide.png" /> 
        		</div>

				<div class="large-12 medium-12 columns text-center margintop marginbottom">
                    <h1>We are processing application,<br>please wait...</h1>
                    <h5><?php echo $parter_name; ?></h5>
                    </div>
				</div>
                </div>

            </div>

        </div>

    </div>

</div>
<?php
include_once "footer.php";
?>

<script>
    $(document).ready(function() {
           var jqxhr = $.ajax({
			url : "/application/payment_varification",
		}).done(function(respo) {
			//error found.
			window.location="/application/agreement_details"
		}).fail(function(respo) {
			console.log(respo);
		});
    });
   
</script>