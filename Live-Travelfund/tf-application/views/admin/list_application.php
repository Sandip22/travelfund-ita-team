<?php
require 'header.php';
require 'menu.php';
//Address url
$add_url = base_url() . 'admin/customers/address';
$app_url = base_url()."admin/customers/application";
?>

<div class="content">
    <table id="tf_list"></table>
    <div id="tf_pager"></div>
</div>

<script>
    var add_url =  "<?php echo $add_url ?>";
    var app_url =  "<?php echo $app_url ?>";
    var cust_name =  "<?php echo $cust_name ?>";
    var cust_id =  "<?php echo $cust_id ?>";
    
    var pageWidth = jQuery("#tf_list").parent().width();
    
    //Date picker
    var datePick = function(elem)
    {
        jQuery(elem).datepicker({dateFormat : 'dd-mm-yy'});
    }
    
    var aColName = ['App. ID', 'App. Status', 'App. Date','Mobile','Departure Date',  
                        'Terms Accepted','More'];
    var aColModel = [{
                        name : 'id',
                        index : 'id',
                        //width : (pageWidth*(15/100)),
                        height : 25,
                        align : "center",
                        //search:true,
                        search:false,
                        searchoptions: { sopt: ['eq', 'gt','lt'],},
                        searchrules:{number:true},                 
                     },
                    {
                        name : 'app_status',
                        index : 'app_status',
                        //width : (pageWidth*(15/100)),
                        height : 25,
                        align : "center",
                        //search:true,
                        search:false, 
                        stype :"select",
                        searchoptions:{
                               sopt: ['eq'],
                               value: ":;approved:Approved;pending:Pending;declined:Declined",
                      }
                    },
                    {
                        name : 'created_datetime',
                        index : 'created_datetime',
                        //width : (pageWidth*(15/100)),
                        height : 25,
                        align : "center",
                        search:false,
                        //searchoptions: { 
                        //                 sopt: ['eq', 'gt','lt'] ,
                        //                 dataInit:datePick, 
                        //                 attr:{title:'Select Date'},
                        //               },
                        sortable : false,
                    },
                    {
                        name : 'mobile_phone',
                        index : 'mobile_phone',
                        //width : (pageWidth*(15/100)),
                        height : 25,
                        align : "left",
                        search:false,
                        //searchoptions: { sopt: ['eq', 'bw','ew'] },
                        //searchrules:{number:true},
                        sortable : false,
                    },
                    {
                        name : 'departure_date',
                        index : 'departure_date',
                        //width : (pageWidth*(15/100)),
                        height : 25,
                        align : "center",
                        search:false,
                        sortable : false,
                        //searchoptions: { 
                        //                 sopt: ['eq', 'gt','lt'] ,
                        //                 dataInit:datePick, 
                        //                 attr:{title:'Select Date'},
                        //               },
                    },
                    {
                        name : 'accept_terms',
                        index : 'accept_terms',
                        //width : (pageWidth*(15/100)),
                        height : 25,
                        align : "center",
                        search : false,
                        sortable : false,
                    },
                    {
                        name : 'more',
                        index : 'more',
                        //width : (pageWidth*(15/100)),
                        height : 25,
                        align : "center",
                        search : false,
                        sortable : false,
                        formatter: function (cellvalue, options, rowObject){
                            //create link
                            var link = '<a href="/tf-admin/customers/more/' + rowObject[0] +'">';
                            link += '<img src="/skin/common/icon/location.png" style="padding-top:7px;height:16px;width:16px;"></a>' ;
                            return link;
                        }
                    },
                    ];
     
               
    //Display jqGrid.
    jQuery("#tf_list").jqGrid({
        url : cust_id ,
        datatype : "json",
        colNames : aColName,
        colModel : aColModel ,
        rowNum : 10,
        rowList : [10, 20, 30],
        pager : '#tf_pager',
        sortname : 'id',
        viewrecords : true,
        sortorder : "asc",
        caption : cust_name + " Application List",
        height: '100%',
        width : pageWidth,
        multiselect: false,
    });
    
    //Basic Search
    jQuery("#tf_list").jqGrid('filterToolbar',{beforeSearch:function(){
        //Set request for basic search.
        $("#tf_list").setGridParam({ postData: {data:'b_s'} });
        return false;
    }});
    
    //Advance Search
    /*
    jQuery("#tf_list").jqGrid('navGrid',
    '#tf_pager',
    {   
        edit : false,
        add : false,
        del : false, 
        refreshtext:"Refresh Grid",
        //searchtext: "Advance Search",
        //searchtitle: "Advance Search",  
        
    },
    {}, {}, {},
    {
        multipleSearch:true,
        caption: "Advance Search...",
        closeOnEscape:true,
    
        //Set request for advance search.
        beforeShowSearch:function(){
            //set advance search.
            $("#tf_list").setGridParam({ postData: {data:'a_s'} });
            return true;
        },
        
    });                        
   */ 

</script>

<?php
    require 'footer.php';
?>
