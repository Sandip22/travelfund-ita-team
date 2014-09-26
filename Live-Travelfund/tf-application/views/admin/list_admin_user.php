<?php 
//header
require 'header.php';
//menu
require 'menu.php';
$app_url = base_url()."tf-admin/users";
?>
<div class="content">
    <table id="tf_list"></table>
    <div id="tf_pager"></div>
</div>
<script>
    var app_url =  "<?php echo $app_url ?>";
    var pageWidth = jQuery("#tf_list").parent().width();
    var aColName = ['User Name', 'First Name', 'Last Name', 'Email', 'User Status'];
    var aColModel = [
                        {
                            name : 'user_name',
                            index : 'user_name',
                            width : '15%',
                            align : "center",
                            sortable : false,
                            //searchoptions: { sopt: ['eq', 'bw','ew','cn'] },
                        }, 
                        {
                            name : 'first_name',
                            index : 'first_name',
                            width : '15%',
                            align : "left",
                            sortable : false,
                            //searchoptions: { sopt: ['eq', 'bw','ew','cn'] },
                        },
                        {
                            name : 'last_name',
                            index : 'last_name',
                            width : '15%',
                            align : "left",
                            sortable : false,
                            //searchoptions: { sopt: ['eq', 'bw','ew','cn'] },
                        }, 
                        {
                            name : 'email',
                            index : 'email',
                            width : '25%',
                            sortable : false,
                            align : "left",
                            sortable : false,
                            //searchoptions: { sopt: ['eq', 'bw','ew','cn'] },
                        }, 
                        {
                            name : 'status',
                            index : 'status',
                            width : '10%',
                            sortable : false,
                            align : "center",
                            //search:true, 
                            //stype :"select",
                            //searchoptions:{
                            //               sopt: ['eq'],
                            //               value: ":;active:Active;deactive:Deactive",
                            //              } 
                        },
                    ];
    //Add column based on user right.
    
    var aRColName = ['Edit','Delete'];
    var aRColModel = [{
                        name : 'edit',
                        index : 'edit',
                        width : '5%',
                        sortable : false,
                        align : "center",
                        search : false,
                        formatter: function (cellvalue, options, rowObject){
                            //create link
                            var link = '<a href="'+ app_url +'/edit_admin_user/'+ rowObject[0] +'">';
                            link += '<img src="/skin/common/images/edit.png" style="padding-top:7px;height:16px;width:16px;"></a>' ;
                            return link;
                        }
                        
                    },
                    {
                        name : 'delete',
                        index : 'delete',
                        width : '5%',
                        sortable : false,
                        align : "center",
                        search : false,
                        formatter: function (cellvalue, options, rowObject){
                            
                            //create link
                            var link = '<a href="'+ app_url +'/delete_admin_user/'+ rowObject[0] +'">';
                            link += '<img src="/skin/common/images/delete.png" style="height:16px;width:16px;"></a>' ;
                            return link;
                        }
                    }];
    
    
    aColName = aColName.concat(aRColName);
    aColModel = aColModel.concat(aRColModel);
        
    
    //Display jqGrid.
    var oJQ = jQuery("#tf_list").jqGrid({
        url : 'get_list',
        datatype : "json",
        colNames : aColName,
        colModel : aColModel ,
        rowNum : 10,
        rowList : [10, 20, 30],
        pager : '#tf_pager',
        sortname : 'user_name',
        viewrecords : true,
        sortorder : "asc",
        caption : "Admin User List",
        height: '100%',
        width : pageWidth,
        multiselect: false,
       /* subGrid : true,
        subGridUrl: 'list_user_rights',
        subGridModel: [{  name  : ['Model','Read','Add','Edit','Delete'], 
                          width : [100,80,80,80,80],
                          align : ['center','center','center','center','center'],
                        }],*/
                        
    });
    
    /*
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
    */
    
</script>
<?php
require 'footer.php';
?>

