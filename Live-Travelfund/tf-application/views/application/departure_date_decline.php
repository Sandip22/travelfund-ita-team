<?php
//Header of page.
require 'header.php';
?>

<script>var partner_url =  "<?php echo $data['partner_url']; ?>";</script>

<div class="row">
    <div class="large-12 medium-12 columns">
        <div class="row">
            <div class="large-1 medium-1 columns ">
                &nbsp;
            </div>

            <div class="large-10 medium-10 columns ">
                <h4 >Ooops...Can you choose a later date. </h4>
                <p>
                    Travelfund is currently only available for departures beyond 7 days.
                    Please note,this application has not effected your credit record.
                </p>
                <p>
                    Able to choose a different date ? Please reapply for a travelfund account.
                </p>
                <p>
                    If you are unable to change your departure date please return to 
                    <?php echo $data['partner_name']; ?> and select an alternative payment method.
                </p>
                <div class="row">
                    <div class="large-12 medium-12 large-centered medium-centered">
                        <button onclick="travelfund_close();" class="button expand">
                            Return to <?php echo $data['partner_name']; ?>
                        </button>
                    </div>
                </div>
            </div>
            <div class="large-1 medium-1 columns">
                &nbsp;
            </div>
        </div>
    </div>
</div>
<script>
    
    function travelfund_close() {
        
        //Detect screen size.
        //if mobile then open in same screen.
        if (screen.width < 800) {
            window.location = partner_url;
        } else {
            parent.location = partner_url;
        }
    }

</script>
<?php
//Footer of page.
require 'footer.php';
?>