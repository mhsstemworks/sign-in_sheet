<html>
<body>
<title>Thank you</title>
    <form action="http://165.248.210.96/mauicounty/index.html">
    <input type="submit" value="Go to log in">
                                    </form>                                            
  <?php

 $firstname = $_POST["firstname"];
 $lastname = $_POST["lastname"];
 $title = $_POST["title"];
 $onbehalf = $_POST["onbehalf"];
 $aitem = $_POST["aitem"];

$list = array(array($firstname, $lastname, $title, $onbehalf, $aitem));

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
