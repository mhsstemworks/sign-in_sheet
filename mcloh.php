<html>
<body>
<title>Thank you</title>
    <form action="http://165.248.210.96/mauicounty/Login.html">
    <input type="submit" value="Go to log in">
                                    </form>                                            
  <?php

 $name = $_POST["Name"];
 $title = $_POST["Title"];

$list = array(array(($name,$title));

$fp = fopen("list.csv","a");
$fpd = fopen("dlist.csv","a");
              
foreach ($list as $fields)
  {
  fputcsv($fp,$fields);
  }
foreach ($list as $fields)
  {
  fputcsv($fpd,$fields);
  }

              
fclose($dfp); 
fclose($fp); ?>
    
    
</body>
</html>
