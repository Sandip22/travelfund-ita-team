<?php

//Header of page.
require 'header.php';
?>
<!-- Foundation js - slider -->
<script type="text/javascript" src="/skin/common/js/foundation/foundation.js"></script>
<script type="text/javascript" src="/skin/common/js/foundation/foundation.slider.js"></script>
<div class="row">
  <div class="large-12 columns">
    <div class="large-12 columns blueBackgroundNoArrow">
      <div class="row">
        <div class="large-12 columns margintop2 marginbottom">
          <div class="large-12 columns">
            <h1>Spread the cost of your holiday over 12 months</h1>
            <br>
          </div>
          <div class="large-12 medium-12 columns text-center marginbottom"><img src="/skin/common/images/interface assets/horizontal_divide.png" /> </div>
          <div class="large-4 medium-4 columns text-center"> <img src="/skin/common/images/more%20info/no_hidden_costs.png" width="150" height="113"/>
            <h3>No Hidden<br>
              Costs</h3>
            <h5>No card transaction fee, no early settlement penalty, no set up charge</h5>
          </div>
          <div class="large-4 medium-4 columns text-center"> <img src="/skin/common/images/more info/financial_protection.png" width="150" height="113"/>
            <h3>Financial<br>
              Protection</h3>
            <h5>Peace of mind you are covered in the unlikely event of financial failure by your travel supplier</h5>
          </div>
          <div class="large-4 medium-4 columns text-center"> <img src="/skin/common/images/more info/no_paperwork_no_waiting.png" width="150" height="113"/>
            <h3>No Waiting,<br>
              No Paperwork</h3>
            <h5>Online credit decision in under 15 seconds with no paperwork.  Balance available for 7 days</h5>
          </div>
          <div class="large-12 medium-12 columns text-center marginbottom">
              <img src="/skin/common/images/interface assets/horizontal_divide.png" /> 
          </div> 
        </div>
        <div class="large-12 columns">
            <div class="large-12 medium-12 columns text-center"><h1>How much will it cost?</h1></div>
        </div>
         <div class="large-12 medium-12 columns">
             
             <div class="large-3 medium-3 columns text-right"><h1>If you spend<font color="#CADB2B" style="font-size:20px;"> -</font></h1></div> 
             <div class="large-6 medium-6 columns" style="padding-left: 0px; padding-right: 0px;">
              <div class="range-slider" data-slider data-options="step: 5;">
                  <span class="range-slider-handle"></span> 
                  <span class="range-slider-active-segment"></span> 
                  <input type="hidden" name="slider_value" id="slider_value" value="50">
              </div>
            </div>
             <div class="large-3 medium-3 columns"><h1><font color="#CADB2B" style="font-size:20px;">+</font> &pound;<span id="spend">1000</span></h1></div> 
         </div>  
        <div class="large-12 columns">
            <div class="large-12 medium-12 columns text-center"><h5>Monthly payments over 12 months &pound;<span id="monthly">91.83</span>
            Total cost &pound;<span id="year">1,101.99</span><br></h5></div>  
                
        </div>
        <div class="large-12 columns">
            <div class="large-19 medium-10 columns text-right"><h6 style=color:white;">Representative 19.9% APR</h6></div>  
        </div>  
          
      </div>
    </div>
  </div>
</div>
</div>
<div class="row">
  <div class="large-3 medium-3 columns large-centered small-centered text-center margintop3"> <img src="/skin/common/images/interface%20assets/blue_arrow.png" /> </div>
</div>
<div class="row">
  <div class="large-12 columns">
    <div class="row">
      <div class="large-4 medium-4 columns large-centered small-centered margintop2">
        <a href="<?php echo site_url("application/how_it_works");?>" class="button expand radius" >Find Out More</a>
      </div>
    </div>
    <div class="row">
      <div class="large-4 medium-4 columns large-centered small-centered text-center"> <a href="<?php echo site_url("application/login");?>">
        <h6><u>I already have an account</u></h6>
        </a> </div>
    </div>
  </div>
</div>
</div>
<?php

//Footer of page.

require 'footer.php';

?>
<script>
    $(document).foundation({
        slider: {
          on_change: function(){
            //set slider value
            var spend_val = $('#slider_value').val();
            spend_val = spend_val*20;
            $("#spend").text(spend_val);
            
            //monthly installment
            var month_val;
            var interest_val;
            interest_val = spend_val*(10.199/100);
            
	    //year installment
            var year_val;
            year_val = spend_val+interest_val;
            year_val = year_val.toFixed(2);
            $('#year').text(year_val);
            
            month_val = year_val/12;
            month_val = month_val.toFixed(2);
            $("#monthly").text(month_val);
            
            
          }
        }
      });
  </script>

