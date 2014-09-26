<?php //Header of page.
require 'header.php';
?>
<div class="row">
    <div class="large-12 columns">
        <div class="row">
            <div class="large-2 medium-2 columns">
                &nbsp;
            </div>
            <div class="large-8 medium-8 columns">
                <div class="row">
                    <div class="large-12 columns">
                       <h5 class="color-text-alt-1">CREDIT AGREEMENT</h5>
                       <div class="panel"><?php echo $data['ci']; ?></div> 
                    </div>
                </div>
            </div>
            <div class="large-2 medium-2 columns">
                &nbsp;
            </div>
        </div>
        <div class="row">
            <div class="large-2 medium-2 columns">
                &nbsp;
            </div>
            <div class="large-8 medium-8 columns">
                <div class="row">
                    <div class="large-12 columns">
                       <h5 class="color-text-alt-1">PRE-CONTRACT CREDIT INFORMATION</h5>
                       <div class="panel"><?php echo $data['secci']; ?></div> 
                    </div>
                </div>
            </div>
            <div class="large-2 medium-2 columns">
                &nbsp;
            </div>
        </div>
    </div>
</div>

<?php
require 'footer.php';
?>