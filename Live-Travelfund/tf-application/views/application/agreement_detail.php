<?php
//Header of page.
require 'header.php';
$loan = str_replace(',' ,'',$data['product_offer']['creditLimit']);
$apr = (string)($data['product_offer']['PurchaseAPR']);

//How much it cost section.
$aCost = get_cost(ITA_BASE_PATH.'views/application/aps_sheet.csv',array('APR'=>$apr,'Loan'=>(int)$loan));

?>
<script>
  $(function() {
    $( "#tabs" ).tabs();
  });
</script>

<div class="row">
  <div class="large-12 columns">
        <div class="pbar">
          <div class="pbar-parts">
            <div class="pbar-part1 pbar-part-color-4">About You</div>
            <div class="pbar-part2 pbar-part-color-4">Address Info</div>
            <div class="pbar-part3 pbar-part-color-4">Employment</div>
            <div class="pbar-part4 pbar-part-color-1">Payment Set-Up</div>
            <div class="pbar-part5 pbar-part-color-3">Credit Agreement</div>
          </div>
        </div>
  </div>
</div>

<div class="row">
  <div class="large-12 medium-12 columns margintop1 blueBackground">
    <div class="row">
      <div class="large-11 medium-11 small-centered large-centered columns"> 
          <?php echo form_open(base_url() . 'application/agreement_inprocess', array(
                            'name' => 'application_complete',
                            'id' => 'application_complete',
                            'autocomplete'=>'off',
                            ));
          ?>
       <div class="row">
           <div class="large-12 medium-12 columns margintop2">
               <div class="large-8 medium-8 columns">
                    <h1>Congratulations</h1>
                    <h4>Your application has been accepted. You're almost there!</h4>
                </div>
                <div class="large-4 medium-4 columns text-right">
                    <img src="../skin/common/images/congratulations/tick.png" />
                </div>
                <div class="large-12 medium-12 columns">
                    <p>You're just a few clicks away from being able to book your holiday using TravelFund.<br />
                      Before you agree to your loan, here is a summary to help you understand how much it will cost 
                      and the  minimum monthly repayments.
                    </p>
                </div>
            </div>
        </div>
        <div class="large-12 medium-12 columns text-center">
            <img src="../skin/common/images/interface assets/horizontal_divide.png" /> 
        </div>
                
        <div class="row">
          <div class="large-12 medium-12 columns margintop2" style="margin-bottom: 0">
            <div class="large-6 medium-6 columns" style="margin-bottom: 0">
                  <h5>Credit limit:</h5>
            </div>
            <div class="large-6 medium-6 columns" style="margin-bottom: 0">
                  <h4>&pound;<?php echo $data['product_offer']['creditLimit']; ?></h4>
            </div>
          </div>
          <div class="large-12 medium-12 columns" style="margin-bottom: 0">
                <div class="large-6 medium-6 columns" style="margin-bottom: 0">
                      <h5>Interest rate :</h5>
                </div>
                <div class="large-6 medium-6 columns" style="margin-bottom: 0">
                      <h4><?php echo $data['product_offer']['PurchaseAPR']; ?>% APR</h4>
                </div>
          </div>
          <div class="large-12 medium-12 columns">
                <div class="large-6 medium-6 columns">
                      <h5>Minimum monthly repayments :</h5>
                </div>
                <div class="large-6 medium-6 columns">
                      <h4>8.3% of your balance + plus interest</h4>
                      <p>In simple terms 1/12th of your balance</p> </div>
           </div>
            <div class="large-12 medium-12 columns">
                <div class="large-6 medium-6 columns">
                      <h5>Deposit required :</h5>
                </div>
                <div class="large-6 medium-6 columns">
                    <?php if( isset( $data['product_offer']['depositRequired']) &&
                                  $data['product_offer']['depositRequired'] == '1') : ?>
                          <h4>10%</h4><p>(Because your are travelling within XX days)</p>
                    <?php else : ?>
                        <h4>N/A</h4>
                    <?php endif ?>      
                </div>
            </div>
          <div class="large-12 medium-12 columns text-center">
                <img src="../skin/common/images/interface assets/horizontal_divide.png" /> 
          </div>
          </div>
          <div class="large-11 medium-11 columns margintop2">
                <h1>How much will it cost?</h1>
                <p>The cost will depend on how much you spend and how quickly you repay your travelfund.
                  Remember, you can pay back your travelfund in full any time.
                </p>
                <h4>Here are some examples : </h4>
                <div class="row">
                    <div class="large-12 medium-12 columns" style="margin-bottom: 0">
                        <div class="large-3 medium-3 columns" style="margin-bottom: 0">
                              <p>If you spend</p>
                        </div>
                        
                        <?php if(isset($aCost[0]) && !empty($aCost[0]['Loan'])): ?>
                        <div class="large-3 medium-3 columns" style="margin-bottom: 0">
                              <p>&pound;<?php echo $aCost[0]['Loan'] ?></p>
                        </div>
                        <?php endif; ?>
                        
                        <?php if(isset($aCost[1]) && !empty($aCost[1]['Loan'])): ?>
                        <div class="large-3 medium-3 columns" style="margin-bottom: 0">
                              <p>&pound;<?php echo $aCost[1]['Loan'] ?></p>
                        </div>
                        <?php endif; ?>
                        
                        <?php if(isset($aCost[2]) && !empty($aCost[2]['Loan'])): ?>
                        <div class="large-3 medium-3 columns" style="margin-bottom: 0">
                              <p>&pound;<?php echo $aCost[2]['Loan'] ?></p>
                        </div>
                        <?php endif; ?>
                        
                    </div>
                    <div class="large-12 medium-12 columns" style="margin-bottom: 0">
                        <div class="large-3 medium-3 columns" style="margin-bottom: 0">
                              <p>Monthly payments</p>
                        </div>
                        <?php if(isset($aCost[0]) && !empty($aCost[0]['Monthly Payments'])): ?>
                        <div class="large-3 medium-3 columns" style="margin-bottom: 0">
                              <p>&pound;<?php echo $aCost[0]['Monthly Payments'] ?></p>
                        </div>
                        <?php endif; ?>
                        
                        <?php if(isset($aCost[1]) && !empty($aCost[1]['Monthly Payments'])): ?>
                        <div class="large-3 medium-3 columns" style="margin-bottom: 0">
                            <p>&pound;<?php echo $aCost[1]['Monthly Payments'] ?></p>
                        </div>
                        <?php endif; ?>
                        
                        <?php if(isset($aCost[2]) && !empty($aCost[2]['Monthly Payments'])): ?>
                        <div class="large-3 medium-3 columns" style="margin-bottom: 0">
                            <p>&pound;<?php echo $aCost[2]['Monthly Payments'] ?></p>
                        </div>
                        <?php endif; ?>
                        
                    </div>
                    <div class="large-12 medium-12 columns" style="margin-bottom: 0">
                        
                        <div class="large-3 medium-3 columns" style="margin-bottom: 0">
                            <p>Total holiday</p>
                        </div>
                        
                        <?php if(isset($aCost[0]) && !empty($aCost[0]['Total Payable'])): ?>
                        <div class="large-3 medium-3 columns" style="margin-bottom: 0">
                              <p>&pound;<?php echo $aCost[0]['Total Payable'] ?></p>
                        </div>
                        <?php endif; ?>
                        
                        <?php if(isset($aCost[1]) && !empty($aCost[1]['Total Payable'])): ?>
                        <div class="large-3 medium-3 columns" style="margin-bottom: 0">
                              <p>&pound;<?php echo $aCost[1]['Total Payable'] ?></p>
                        </div>
                        <?php endif; ?>
                        
                        <?php if(isset($aCost[2]) && !empty($aCost[2]['Total Payable'])): ?>
                        <div class="large-3 medium-3 columns" style="margin-bottom: 0">
                          <p>&pound;<?php echo $aCost[2]['Total Payable'] ?></p>
                        </div>  
                        <?php endif; ?>
                        
                    </div>
                </div>
          
                <div class="large-12 medium-12 columns text-center">
                  <img src="../skin/common/images/interface assets/horizontal_divide.png" /> 
                </div>
                   
                <div class="row">
                    <div class="large-12 medium-12 columns margintop2">
                        <h1>Credit Agreement</h1>
                        <p>Here are the terms and conditions for your travelfund credit agreement which can be accessed from 
                              "My Account" at any time </p>
                    </div>
                    <div class="large-12 medium-12 columns text-right">   
                        <p>
                            <a href="/application/print_agreements" target="_blank"><u>Print Agreement</u></a></p>
                        <div id="tabs">
                        <ul>
                            <li><a href="#tab1">Agreement Information</a></li>
                            <li><a href="#tab2">Pre-contract credit information (SECCI)</a></li>
                        </ul>
                        <div id="tab1" style="height:300px; overflow-y: scroll"> <?php echo $data['ci'] ?> </div>
                             <div id="tab2" style="height:300px; overflow-y: scroll"> <?php echo $data['secci'] ?> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-12 medium-12 columns">&nbsp;&nbsp;&nbsp;&nbsp;
                          <input type='checkbox' name='accept_terms' id='accept_terms' value='' />
                          <label for="accept_terms" class="inline">Please tick the box if you accept the credit agreement *</label>
                          <div id="err_accept_terms"><?php echo form_error('accept_terms'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="large-1 medium-1 columns">&nbsp;</div>
      </div>
      </div>
  </div>
      <div class="row">
        <div class="large-3 medium-3 columns large-centered small-centered text-center margintop3"> <img src="../skin/common/images/interface assets/blue_arrow.png" /> </div>
      </div>
      <div class="row">
        <div class="large-3 medium-3 columns large-centered small-centered text-center margintop2">
         <button name="submit" it="submit" type="submit" class="button radius orange" value="insert" >Continue</button>
        </div>
      </div>
  </div>
</div>

<!-- client side velitation -->
<script type="text/javascript" charset="utf-8">
    
   $( document ).ready(function() {
       
       //Set value of check box as per checked status.
       $("#accept_terms").click(function(ele){
               if(this.checked === true)
               {
                   $(this).prop("value","yes");
               }else{
                   $(this).prop("value","");
               }
           }
       );
        
        //Client side validation rule.
        validation.addCRule({field:"accept_terms",label:"Please tick the box if you accept the credit agreement",rule : 'required'});
                
        //Bind validation to element.  
        validation.bind(validation);
    
    });//end  
                
</script>
<?php
//footer 
include_once "footer.php";

function get_cost($filename='',$aParam ,$delimiter=',')
{

    if(!file_exists($filename) || !is_readable($filename)) {
        return FALSE;
    }
    
    $header = NULL;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== FALSE)
    {
        while (($row = fgetcsv($handle, 1000, $delimiter,'"')) !== FALSE)
        {
            if(!$header)
                $header = $row;
            else
                $data[] = array_combine($header, $row);
        }
        fclose($handle);
    }
    
    $aReturn = array();
   
    foreach($data as $arr){
        
        $loan=(int)str_replace(',','', $arr['Loan']);
        if ( (strpos($arr['APR'],$aParam['APR']) !== false)
              && ($loan <= $aParam['Loan'])
           ){
            if($loan == 500 && $aParam['Loan'] == 2000){
                continue;
            }
              
            $aReturn[]= $arr ;
        }
    }
    
    return $aReturn;
}

?>

