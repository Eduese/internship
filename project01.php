<!Doctype html>
<html>
<body>
<!--link rel = "stylesheet" href = "project01.css"-->
<style>
.naturetxt{
	position: absolute;
	top: 40%;
	left: 40%;
	font-size: 2.5em;
	
}

.container1{
	position:relative;
	text-align:center;
	color: white;
}

.finepics{
	position:relative;
}
</style>

<div class="container1">

<img src ="nature_0025.jpg"  class="finepics"> 
<p class="naturetxt">
<?php

echo " Today is : ".date("l")." ".date("Y-m-d").'<br><br>' ;

date_default_timezone_set("Africa/Lagos");
 
echo " and the time is  ".date(" h : i : s ");
//this is a new comment
?>

   

</p>
</div>
</body>
</html>
