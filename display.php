<!DOCTYPE html>
<html> 
<meta http-equiv="refresh" content="5" >
<head> 
<title>A BASIC HTML FORM</title> 
<body> 
<p>
<?php
echo date("D M d, Y G:i a");
?> 
</p> 

<p1>
<form method="POST" action=''>
<input type="submit" name="button1" value="Next">
</form>

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
  
print $line_of_text[0] . " " . $line_of_text[1] . " " . $line_of_text[2] ."<BR>"; 
  
} 
  
fclose($file_handle); 

?>



<form method="POST" action=''> 
<input type="submit" name="button2" value="Delete" onClick="return confirm('Are you sure you want to delete the lists');">
</form>
<?php
if (isset($_POST['button2']))
{
$fp = fopen("sdlist.csv", "w");
$dfp = fopen("dlist.csv", "w");
$sfp = fopen("list.csv", "w");
}
?>


</p1>

</body>


</html>
