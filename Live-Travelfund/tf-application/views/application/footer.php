<?php
/*
global $start_time;
$end_time = time();
$diff = $end_time-$start_time;

echo "<p style='text-align: center;'><br />Start Time : " . date("d-m-Y H:i:s",$start_time);
echo "<br />End Time : " . date("d-m-Y H:i:s",$end_time);

echo "<br /><b>Execution time : {$diff}</b><small>sec<small></p>";
*/
?>

 
<?php

if(ENVIRONMENT == "development" || ENVIRONMENT == "testing" ){
    
    ?>
    <div>
        <div class="large-3 medium-3 columns"><h1><a style="color:black;" onclick="populate_form();">Demo Data</a></h1></div>
        <div class="large-3 medium-3 columns">&nbsp;</div>
        <div class="large-3 medium-3 columns">&nbsp;</div>
    </div>
    <?php
    $ci = & get_instance();
    $aSess  = $ci->session->all_userdata();

    if( isset($aSess['application']['app_detail']['mobile_phone']) && 
        isset($aSess['len_app_id'])){
            
        echo '<div class="row">';
        echo '<div class="large-12 columns">';
        echo "<h6>Application ID :: " . $aSess['len_app_id'];
        echo "</h6><br />";
        echo "<h6>Mobile Phone :: " . $aSess['application']['app_detail']['mobile_phone'];
        echo "</h6><br />";
        echo '<h6><a class="decline_msg" target="_blank"  href="https://test.secure.mycashplus.co.uk/UATTools/"> Reset Application </a></h6>';
        echo '</div>';        
        echo '</div>';    
    }    
}
?>
        
</div>
</body>
</html>