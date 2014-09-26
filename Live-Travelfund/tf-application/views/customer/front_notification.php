<?php
//Header of page.
require ITA_BASE_PATH.'views/header.php';
?>
<div class="middleBar">
<div class="row">
    <div class="large-12 columns">
        <div class="panel radius" style="margin-top: 20px;">
            <span class="panel-title radius"><?php echo $heading1 ?></span>
            <h5><small class="color-text"><?php echo $msg1 ?></small></h5> 
            <div class="row">
                <div class="large-3 medium-3 columns">
                    <a class='button radius' href="<?php echo base_url().'customer/myaccount';?>">My Account</a>
                </div>
                <div class="large-3 large-centered medium-3 columns">&nbsp</div>
                <div class="large-3 large-centered medium-3 columns">&nbsp</div>
            </div>
        </div>    
    </div>
</div>  
</div>    
<?php
include_once ITA_BASE_PATH."views/footer.php";
?>