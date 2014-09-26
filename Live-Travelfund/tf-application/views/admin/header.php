<!DOCTYPE html>
<!--[if lt IE 8]><html class="ie7"><![endif]-->
<!--[if IE 8]><html class="ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html>
    <!--<![endif]-->
    <head>
        <link rel="stylesheet" type="text/css" href="/skin/backend/css/style.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="/skin/common/css/jquery-ui-1.10.4/ui-lightness/jquery-ui.min.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="/skin/common/css/ui.jqgrid-4.6.0.css" />
        <script src="/skin/common/js/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="/skin/common/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
        <script src="/skin/backend/js/jqgrid/jquery.jqGrid-4.6.0.min.js" type="text/javascript"></script>
        <script src="/skin/backend/js/jqgrid/i18n/grid.locale-en.js"></script>
    </head>
    <body>
        <?php
            global $admin_user_full_name; 
        ?>
        <noscript>
            <meta HTTP-EQUIV="REFRESH" content="0; url=http:www.google.com"> 
        </noscript>
        <div class="main-container">
            <div class="header">
                <div class="float-left logo">
                    <img src="/skin/common/images/logo.png">
                </div>
                <?php if( !empty($admin_user_full_name) ) :?>
                <div class="float-right" style="text-align:right">
                    <span class="welcome">Welcome, <?php echo $admin_user_full_name?></span><br />
                    <a class="logout" href="/tf-admin/logout">Logout</a>
                </div>
                <?php endif; ?>
            </div>
            <div class="clear-floats"></div>		