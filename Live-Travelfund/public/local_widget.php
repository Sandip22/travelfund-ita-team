<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Travel Pack</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" lang="en" content="" />
        <meta name="keywords" lang="en" content="" />
        <script type="text/javascript" src="http://travelfund.localhost/partner/widget/local_tf_app_travelpack.min.js?partner_code=Travel-Pack"></script>
        <!--<script type="text/javascript" src="http://tf-test.travelfund.co.uk/partner/widget/tf_app_travelpack.min.js?partner_code=Travel-Pack"></script>-->
        
    </head>

    <body>
        
        <!--  TRAVEL FUND: Code to insert checkout widget -- START -->
        <div id="travelfund_checkout_widget" data-action="checkout"  data-image="pocket51x32" style="width: 100%;height:200px;overflow:scroll;display: none">&nbsp;</div>
        <!--  TRAVEL FUND: Code to insert checkout widget -- END -->
                    
        <table border="0" cellspacing="0" cellpadding="0" width="400" style="border: #878787;">
            <tr>
                <td>Card Type</td>
                <td>
                    <select onchange="otafunction(this);" id="Payment-Type" name="Payment[Type]">
                        <option selected="selected" value="">Choose Payment</option>
                        <option value="VI">Visa (2.00%)</option>
                        <option value="MC">Mastercard (2.00%)</option>
                        <option value="VD">Visa Debit (0.00%)</option>
                        <option value="SW">Maestro (Solo) (0.00%)</option>
                        <option value="CO">Electron (0.00%)</option>
                        <option value="PP">Paypal (2.00%)</option>
                        <option value="TF">Fly Now Pay Later (0.00%)</option>
                  </select>
                </td>
            </tr>
            <tr>
                <td align="center" width='25%'><b>Small Image</b></td>
                <td align="center" width='75%'>
                    <!--  TRAVEL FUND: Code to insert SMALL widget -- START -->
                    <div id="travelfund_widget_1" data-action="application"  data-image="app100x50">
                        <script>
                         if (travelfund('travelfund_widget_1') == false) {
                                document.write("<div style='height: 50px; width: 50px; background-color: grey;'>Widget Off</div>");
                         }
                        </script>    
                    </div>
                    <!--  TRAVEL FUND: Code to insert widget -- END -->
                    <!--  TRAVEL FUND: Code to insert BIG widget -- START -->
                    <div id="travelfund_widget_2" data-action="application"  data-image="app299x235">
                        <script>
                         if (travelfund('travelfund_widget_2') == false) {
                                document.write("<div style='height: 50px; width: 50px; background-color: grey;'>Widget Off</div>");
                         }
                        </script>    
                    </div>
                    <!--  TRAVEL FUND: Code to insert widget -- END -->
                </td>
            </tr>

            <tr>
                <td>&nbsp;</td>
            </tr>
        </table>
    </body>
</html>
<script>
    /*
     * OTA function which will fire travelfund login page.
     */
    function otafunction(ele){
        //Selected option 
        if(ele.options[ele.selectedIndex].value == 'TF'){
            travelfund('travelfund_checkout_widget');    
        }
    }
</script>