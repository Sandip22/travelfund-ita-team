<?php //Header of page.
require ITA_BASE_PATH.'views/header.php';
?>
<div class="middleBar">
<div class="row">
    <div class="large-12 columns">
        <div class="row">
            <div class="large-2 medium-2 columns">
                &nbsp;
            </div>
            <div class="large-8 medium-8 columns">
                <div class="row">
                    <div class="large-12 columns">
                       <h5 class="color-text-alt-1"><?php echo $heading1 ?></h5>
                       <h5><small class="color-text"><?php echo $msg1 ?></small></h5> 
                    </div>
                </div>
            </div>
            <div class="large-2 medium-2 columns">
                &nbsp;
            </div>
        </div>
    </div>
</div>
</div>
<?php
include_once ITA_BASE_PATH."views/footer.php";
?>