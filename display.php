<!DOCTYPE HTML>
<html>
<head>
<link type="text/css" rel="stylesheet" href="display.css">
<meta charset="utf-8" http-equiv="refresh" content="5" >

<title>Display</title>
<script>
function time() {

	var clock = document.querySelector('.time');
	
	// But there is a little problem
	// we need to pad 0-9 with an extra
	// 0 on the left for hours, seconds, minutes
	
	var pad = function(x) {
		return x < 10 ? '0'+x : x;
	}
	
	var ticktock = function() {
		var d = new Date();
		
		var h = pad( d.getHours() );
		var m = pad( d.getMinutes() );
		var s = pad( d.getSeconds() );
		
		var current_time = [h,m,s].join(':');
		
		clock.innerHTML = current_time;
		
	}
	
	ticktock();
	
	// Calling ticktock() every 1 second
	setInterval(ticktock, 1000);

}
</script>
</head>

<body onload="time()">

<div class="table">
<table> 
<tr> 
<th>Name:</th>
</tr>
<tr>
<td>
<?php

$c = 0;
if (isset($_POST['button1']))
{
$file = fopen("dlist.csv", "r");

$dfd = fopen("sdlist.csv","w");
$fp = fopen("sdlist.csv", "r");
while(($line = fgetcsv($file)) !== FALSE)
{
if($c !== 0)
{
fputcsv($dfd,$line);
}
else
{
$c = 1;
fputcsv($dfd,"");
}
}
$dfile = fopen("dlist.csv", "w");
while(($line = fgetcsv($fp)) !== FALSE)
{

fputcsv($dfile,$line);

}
}

fclose($file); 
fclose($dfp);
fclose($dfile); 
fclose($fp);

$file_handle = fopen("sdlist.csv", "r"); 
  
while (!feof($file_handle) ) { 
  
$line_of_text = fgetcsv($file_handle, 1024); 
  
print $line_of_text[0] . " " . $line_of_text[1] . " " . "<br>"; 
  
} 
  
fclose($file_handle); 


?>

</td>
</tr>
</table>

<form method="POST" action=''>
<input type="submit" name="button1" class="button1" value="Next">
</form>

<form method="POST" action=''> 
<input type="submit" name="button2" class="button2" value="Delete" onClick="return confirm('Are you sure you want to delete the lists');">
</form>
<?php
if (isset($_POST['button2']))
{
$fp = fopen("sdlist.csv", "w");
$dfp = fopen("dlist.csv", "w");
$sfp = fopen("list.csv", "w");
}
?>

</div>

<div id="date" class="date">
<script>
	var d = new Date();
	document.getElementById("date").innerHTML = d.toDateString();
</script>
</div>

<div class="time">
00:00:00
</div>
</body>
</html>
