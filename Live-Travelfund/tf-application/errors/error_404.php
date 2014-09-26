<!DOCTYPE html>
<html lang="en">
<head>
<title>404 Page Not Found</title>


<style type="text/css">


::selection{ background-color: #E13300; color: white; }
::moz-selection{ background-color: #E13300; color: white; }
::webkit-selection{ background-color: #E13300; color: white; }

body {
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
		line-height: 1.4;
	font-weight: normal;
	margin:0;
	padding:0;

}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
	text-decoration:none;
}

h1 {
	font-size: 2.125rem;
	color: #FFF;
	font-weight:bold;
}

p {
		font-size: 1.375rem;
	color: white;
	font-weight:bold;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#logo {
	margin-left:20%;
	margin-right:20%;
	margin-top:5%;
	background:#FFF;
}

#container {
	margin:0;
		background:url(../img/interface_assets/background.jpg) center no-repeat;
background: -webkit-radial-gradient(circle, #26C2E8 10%, #1A9AD6 50%); /* Safari 5.1 to 6.0 */
background: -o-radial-gradient(circle, #26C2E8 10%, #1A9AD6 50%); /* For Opera 11.6 to 12.0 */
background: -moz-radial-gradient(circle, #26C2E8 10%, #1A9AD6 50%); /* For Firefox 3.6 to 15 */
background: -ms-radial-gradient(circle, #26C2E8 10%, #1A9AD6 50%); /* For Firefox 3.6 to 15 */
background: radial-gradient(circle, #26C2E8 10%, #1A9AD6 50%); /* Standard syntax */
	min-height: 500px;
	position:inherit;
	z-index:1;
	}
	
#content {
		margin-left:20%;
	margin-right:20%;
	padding-top:5%;
}

.button {
	
position:relative;
float: left;
width: 100%;
min-height: 30px;
padding: 0;
padding-top:5px;
border: 2px solid #FFF;
height:1.563em;
margin: 0 15px 15px 0;

-webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;
-moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; 
box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; 
color:#FFF;
text-align:center;
font-family: "PT Sans Caption Bold", "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
font-size:1.6em;
background:#F3A41D;
    -webkit-border-radius: 5px;
    border-radius: 5px;
	width:20%;
	margin-top:2%;
	}

  button.radius, .button.radius {
    -webkit-border-radius: 8px;
    border-radius: 8px; }

.button:before,
.button:after {
content: '';
z-index: -1;
position: absolute;
left: 10px;
bottom: 5px;
width: 70%;
max-width: 100px; /* avoid rotation causing ugly appearance at large container widths */
max-height: 100px;
height: 55%;
-webkit-box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
-webkit-transform: skew(-15deg) rotate(-6deg);
-moz-transform: skew(-15deg) rotate(-6deg);
-ms-transform: skew(-15deg) rotate(-6deg);
-o-transform: skew(-15deg) rotate(-6deg);
transform: skew(-15deg) rotate(-6deg);
border-color:#FFF; }


.button:after {left: auto;
right: 10px;
-webkit-transform: skew(15deg) rotate(6deg);
-moz-transform: skew(15deg) rotate(6deg);
-ms-transform: skew(15deg) rotate(6deg);
-o-transform: skew(15deg) rotate(6deg);
transform: skew(15deg) rotate(6deg);
z-index: -1; }


  button:hover, button:focus, .button:hover, .button:focus {
    background-color: #f8ca7c; }
  button:hover, button:focus, .button:hover, .button:focus {
    color: white; }
	
	
	button.success, .button.success {
    background-color:#FFF;
    border-color:#FFF;
    color: white; }


</style>
</head>
<body>
<div>
		<div id="logo">
        <img src="/skin/common/img/interface_assets/travelfund_logo.png" alt="travelFund">
        </div>
        <div id="container" style="tex">
        <div id="content">
		<h1><?php echo $heading; ?></h1>
        <img src="/skin/common/img/interface_assets/horizontal_divide.png">
		<p><?php echo $message; ?></p>
        <a href="https://www.travelfund.co.uk" class="button">Return Home</a>
        </div>
	</div>

    </div>
    </div>
</body>
</html>