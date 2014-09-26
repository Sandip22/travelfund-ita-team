<?php 
//header
require 'header.php';
//menu
require 'menu.php';

?>
<div class="content">
    <table id="tf_list"></table>
    <div id="tf_pager"></div>
</div>

<script>
	var pageWidth = jQuery("#tf_list").parent().width();
	//Date picker
    var datePick = function(elem)
    {
        jQuery(elem).datepicker({dateFormat : 'dd-mm-yy'});
        
        //Fire search event for basic search after date selection.
        if(elem.id == "gs_application__created_datetime" || elem.id == "gs_application__modified_datetime"){
            jQuery(elem).change(function(){
                $("#tf_list")[0].triggerToolbar();
            });
        }else{
            jQuery(elem).change(function(){
                return;
            });
        }
    }
	var aColNames = ['Cust Id','App Id', 'First Name', 'Last Name', 'Email','Lender App Id','App Status','TF Status','App Created Date','App Modified Date','Partner','Application'];
	var aColModel = [{
                name : 'id',
                index : 'id',
                width : (pageWidth*(7/100)),
                align : "center",
                search:true,
                searchoptions: { sopt: ['eq'],},
               // searchrules:{number:true},                               
            }, 
            {
                name : 'application__id',
                index : 'application__id',
                width : (pageWidth*(7/100)),
                align : "center",
                search:true,
                searchoptions: { sopt: ['eq'],},
               // searchrules:{number:true},                               
            },
            {
                name : 'first_name',
                index : 'first_name',
                width : (pageWidth*(15/100)),
                align : "left",
                searchoptions: { sopt: ['eq', 'bw','ew','cn'] },
            }, {
                name : 'last_name',
                index : 'last_name',
                width : (pageWidth*(15/100)),
                align : "left",
                searchoptions: { sopt: ['eq', 'bw','ew','cn'] },
            }, 
            {
                name : 'email',
                index : 'email',
                width : (pageWidth*(20/100)),
                sortable : false,
                align : "left",
                searchoptions: { sopt: ['eq', 'bw','ew','cn'] },
            },
            {
                name : 'application__len_app_id',
                index : 'application__len_app_id',
                width : (pageWidth*(7/100)),
                align : "center",
                search:true,
                searchoptions: { sopt: ['eq'],},
               // searchrules:{number:true},                               
            }, 
            {
                    name : 'application__app_status',
                    index : 'application__app_status',
                    //width : (pageWidth*(15/100)),
                    height : 25,
                    align : "center",
                    search:true, 
                    stype :"select",
                    searchoptions:{
                           sopt: ['eq'],
                           value: ":;approved:Approved;declined:Declined;duplicate:Duplicate;in_complete:In-complete",
                  }
            },
            {
                    name : 'application__tf_status',
                    index : 'application__tf_status',
                    //width : (pageWidth*(15/100)),
                    height : 25,
                    align : "center",
                    search:true, 
                    stype :"select",
                    searchoptions:{
                           sopt: ['eq'],
                           value: ":;NO_RESPONSE:No Response;VCDEC:Verfication Decline;CHECKOUT_NO_RESPONSE:Checkout No Response;LOGIN_NO_RESPONSE:Login No Response;MYACC_NO_RESPONSE:My Account No Response",
                  }
            },
            {
                    name : 'application__created_datetime',
                    index : 'application__created_datetime',
                    //width : (pageWidth*(15/100)),
                    height : 25,
                    align : "center",
                    searchoptions: { 
                                     sopt: ['cn', 'gt','lt'] ,
                                     dataInit:datePick, 
                                     attr:{title:'Select Date'},
                                   },
            },
            {
                    name : 'application__modified_datetime',
                    index : 'application__modified_datetime',
                    //width : (pageWidth*(15/100)),
                    height : 25,
                    align : "center",
                    searchoptions: { 
                                     sopt: ['cn', 'gt','lt'] ,
                                     dataInit:datePick, 
                                     attr:{title:'Select Date'},
                                   },
            },
            {
                    name : 'application__partner_id',
                    index : 'application__partner_id',
                    //width : (pageWidth*(15/100)),
                    height : 25,
                    align : "center",
                    search:true, 
                    stype :"select",
                    searchoptions:{
                           sopt: ['eq'],
                           value: ":;1:TravelPack;2:Travelfund;3:IGLU",
                  }
            },
            {
                name : 'application',
                index : 'application',
                width : (pageWidth*(5/100)),
                sortable : false,
                align : "center",
                search : false,
                formatter: function (cellvalue, options, rowObject){
                //create link
                var link = '<a href="/tf-admin/customers/application/' + cellvalue +'">';
                link += '<img src="/skin/common/icon/application.png" style="padding-top:7px;height:16px;width:16px;"></a>' ;
                return link;
                }
           }];
           
        	jQuery("#tf_list").jqGrid({
        	    //request for first page by default.
            	url : '/tf-admin/customers/get_list/1',
            	datatype : "json",
            	colNames : aColNames,
            	colModel : aColModel,
            	rowNum : 10,
            	rowList : [10, 20, 30],
            	pager : '#tf_pager',
            	sortname : 'id',
            	viewrecords : true,
            	sortorder : "asc",
            	caption : "Customer List",
            	height: '100%',
            	width : pageWidth,
        	});
	
	//Enable Basic Search
    jQuery("#tf_list").jqGrid('filterToolbar',{beforeSearch:function(){
        $("#tf_list").setGridParam({ postData: {data:'b_s'} });
        return false;
    }});
    
	//Enable Mulitpale Advance Search
	jQuery("#tf_list").jqGrid('navGrid',
	'#tf_pager',
	{   
        edit : false,
        add : false,
        del : false, 
        refreshtext:"Refresh Grid",
        searchtext: "Advance Search",
        searchtitle: "Advance Search",  
        
    },
	{}, {}, {},
	{
    	multipleSearch:true,
        caption: "Advance Search...",
        closeOnEscape:true,

        //Reset basic filter each time when search dialog box is display
        //Do not reset filter after search box is closed because filters
        //are required while doing pagination.
        beforeShowSearch:function(){
            //set advance search.
            $("#tf_list").setGridParam({ postData: {data:'a_s'} });
            
            return true;
        },
	    
	});
</script>
<?php
require 'footer.php';
?>

