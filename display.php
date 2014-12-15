<!DOCTYPE html>
<html> 
<meta http-equiv="refresh" content="5" >
<head> 
<title>A BASIC HTML FORM</title> 
<body> 

<?PHP 
  
$file_handle = fopen("dlist.csv", "r"); 
  
while (!feof($file_handle) ) { 
  
$line_of_text = fgetcsv($file_handle, 1024); 
  
print $line_of_text[0] . $line_of_text[1]."<BR>"; 
  
} 
  
fclose($file_handle); 
  
?> 
</body> 
</html>
