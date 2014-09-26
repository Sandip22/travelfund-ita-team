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
    
    var aColName = ['Id','Name', 'Status', 'Code', 'Phone','Email'];
    var aColModel = [{
                        name : 'id',
                        index : 'id',
                        height : 25,
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
                        align : "center",
                        search:true, 
                        stype :"select",
                        searchoptions:{
                                       sopt: ['eq'],
                                       value: ":;active:Active;deactive:Deactive",
                        },
                    },
                    {
                        name : 'code',
                        index : 'code',
                        height : 25,
                        align : "left",
                        sortable : false,
                        searchoptions: { sopt: ['eq', 'bw','ew','cn'] },
                    },
                    {
                        name : 'phone',
                        index : 'phone',
                        height : 25,
                        sortable : false,
                        align : "left",
                        searchoptions: { sopt: ['eq', 'bw','ew','cn'] },
                    },
                    {
                        name : 'email',
                        index : 'email',
                        height : 25,
                        sortable : false,
                        align : "left",
                        searchoptions: { sopt: ['eq', 'bw','ew','cn'] },
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
        caption : "Partner List",
        height: '100%',
        width : pageWidth,
        multiselect: false,
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