<?php
    require 'header.php';
    require 'menu.php';
?>
<div class="content">
    <span class="title">
        <?php
            //Display customer name; 
            echo $customer_name;
            //Display Application ID            
            if(isset($data[0]) && isset($data[0]->application_id)){
               echo  '- Application ID : '.$data[0]->application_id; 
            }
        ?>
    </span>
    <?php
        //No Employment detail.
        if(empty($data["emp"])):
    ?>
            <table class="address-list">
                <tr>
                    <td style="text-align:center" class='address-list-cell'>
                    <span class="error-msg">Employment data not found.</span>      
                    </td>
                </tr>            
            </table>
    <?php
        else:
           $oEmp = $data["emp"];
    ?>
            <br />   
            <table  class='address-list'>
                <tr><td colspan="5" class="address-list-caption">Employement Details </td></tr>
                <tr> 
                <td class="address-list-cell address-list-header" style="vertical-align:top">Employement status</td>
                <td class="address-list-cell"><?php echo $oEmp->emp_status; ?></td>
                <td class="address-list-cell-blank">&nbsp;</td>
                <td class="address-list-cell address-list-header" style="vertical-align:top">Employement type</td>
                <td class="address-list-cell" style="vertical-align:top"><?php  echo $oEmp->emp_type; ?></td>
                </tr>
                <tr>
                    <td class="address-list-cell address-list-header">Residential status</td>
                    <td class="address-list-cell"><?php echo $oEmp->res_status; ?></td>
                    <td class="address-list-cell-blank">&nbsp;</td>  
                    <td class="address-list-cell address-list-header">Annual household income before tax</td>
                    <td class="address-list-cell"><?php echo $oEmp->anum_hs_income_b_tax; ?></td>
                </tr>
                <tr>
                    <td class="address-list-cell address-list-header">Salary Day</td>
                    <td class="address-list-cell"><?php echo $oEmp->salary_day; ?></td>
                    <td class="address-list-cell-blank">&nbsp;</td>
                    <td class="address-list-cell address-list-header">&nbsp;</td>
                    <td class="address-list-cell">&nbsp;</td>                        
                </tr>
            
            
    <?php            
        endif;                
    ?>
    <?php
        //No address.
        if(empty($data["add"])):
    ?>
            <table class="address-list">
                <tr>
                    <td style="text-align:center" class='address-list-cell'>
                    <span class=" error-msg">Address data not found.</span>      
                    </td>
                </tr>            
            </table>
    <?php
        else:
           $oAdd = $data["add"];
            if(empty($data["emp"]))
                echo "<table class='address-list'>";
    ?>      
                
                <tr><td colspan="5" class="address-list-caption">Address Details</td></tr>
                <tr> 
                <td class="address-list-cell address-list-header" style="vertical-align:top">House Number</td>
                <td class="address-list-cell"><?php echo $oAdd->house_number; ?></td>
                <td class="address-list-cell-blank">&nbsp;</td>
                <td class="address-list-cell address-list-header" style="vertical-align:top">Street</td>
                <td class="address-list-cell" style="vertical-align:top"><?php  echo $oAdd->street; ?></td>
                </tr>
                <tr>
                    <td class="address-list-cell address-list-header">Post Code</td>
                    <td class="address-list-cell"><?php echo $oAdd->post_code; ?></td>
                    <td class="address-list-cell-blank">&nbsp;</td>  
                    <td class="address-list-cell address-list-header">City</td>
                    <td class="address-list-cell"><?php echo $oAdd->city; ?></td>
                </tr>
                <tr>
                    <td class="address-list-cell address-list-header">County</td>
                    <td class="address-list-cell"><?php echo $oAdd->county; ?></td>
                    <td class="address-list-cell-blank">&nbsp;</td>
                    <td class="address-list-cell address-list-header">How many addresses have you lived at during the last there years</td>
                    <td class="address-list-cell"><?php echo $oAdd->howmany_add; ?></td>                        
                </tr>
            </table>
    <?php            
        endif;                
    ?>
</div>
<?php
    require 'footer.php';
?>