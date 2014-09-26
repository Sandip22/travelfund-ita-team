<?php
require 'header.php';
require 'menu.php';
//url
$base_url = base_url() ;
?>
<div class="content">
    <table id="tf_list"></table>
    <div id="tf_pager"></div>
</div>

<script>
var base_url =  "<?php echo $base_url ?>";
var pageWidth = jQuery("#tf_list").parent().width();

var aColName = ['Id','Name', 'Status', 'Code', 'Phone','Email','Url']
var aColModel = [{
                    name : 'id',
                    index : 'id',
                    height : 25,
                    width : 50,
                    align : "center",
                    search:true,
                    searchoptions: { sopt: ['eq', 'gt','lt'],},
                    searchrules:{number:true},
                 },
                {
                    name : 'name',
                    index : 'name',
                    height : 25,
                    align : "left",
                    searchoptions: { sopt: ['eq', 'bw','ew','cn'] },
                },
                {
                    name : 'status',
                    index : 'status',
                    height : 25,
                    width : 80,
                    align : "center",
                    stype :"select",
                    searchoptions:{
                                   sopt: ['eq'],
                                   value: ":;active:Active;deactive:Deactive",
                    },
                },
                {
                    name : 'code',
                    index : 'code',
                    width : 70,
                    height : 25,
                    align : "left",
                    sortable : false,
                    searchoptions: { sopt: ['eq', 'bw','ew','cn'] },
                },
                {
                    name : 'phone',
                    index : 'phone',
                    height : 25,
                    width : 70,
                    sortable : false,
                    align : "left",
                    searchoptions: { sopt: ['eq', 'bw','ew','cn'] },
                },
                
                {
                    name : 'email',
                    index : 'email',
                    height : 25,
                    align : "left",
                    sortable : false,
                    searchoptions: { sopt: ['eq', 'bw','ew','cn'] },
                },
                {
                    name : 'url_for_app',
                    index : 'url_for_app',
                    height : 25,
                    sortable : false,
                    align : "left",
                    search : false,
                },
                ];
                    
    //Display jqGrid.
    jQuery("#tf_list").jqGrid({
        url :'get_list',
        datatype : "json",
        colNames : aColName,
        colModel : aColModel ,
        rowNum : 10,
        rowList : [10, 20, 30],
        pager : '#tf_pager',
        sortname : 'id',
        viewrecords : true,
        sortorder : "asc",
        caption : "Lender List",
        height: '100%',
        width : pageWidth,
        multiselect: false,
        subGrid : true,
        subGridUrl: 'more_info',
        subGridModel: [{  name  : ['Address'], 
                          width : ["100%"],
                          align : ['left'],
                        }],
    });
    //Enable Basic Search
    /*
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