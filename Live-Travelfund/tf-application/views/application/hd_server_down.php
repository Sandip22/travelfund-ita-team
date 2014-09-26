<?php
//Header of page.
require 'header.php';
?>

<div class="row">
	<div class="large-12 columns"> 
    <div class="large-12 medium-12 columns blueBackground">

        <div class="row">

			<div class="large-12 columns margintop2">
            
            <div class="large-12 medium-12 columns marginbottom">
                <h1>Opps! Something has gone wrong.</h1>
                <h5>We're sorry but something unexpected has happened.
                    This may be a temporary problem, so please come back later and try again.
                </h5>
                <h5>If it persists, please contact <a style="color:FFF; size:1.125rem;" href="mailto:support@travelfund.co.uk"><u>support@travelfund.co.uk</u></a></h5>
            </div>    
        </div>
    </div>
</div>
<script>
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
<?php
include_once "footer.php";
?>

