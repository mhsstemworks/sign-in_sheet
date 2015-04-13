<html>
<body>

    <meta http-equiv="refresh" content="0 ; http://165.248.210.100/Login.html"> 
   
                                    </form>
                                           
  <?php

 $firstname = $_POST["firstname"];
 $lastname = $_POST["lastname"];
 $title = $_POST["title"];
 $email = $_POST["email"];
 $phonenumber = $_POST["phonenumber"];
 $onbehalf = $_POST["onbehalf"];
 $aitem = $_POST["aitem"];

$list = array(array($firstname, $lastname, $title, $email, $phonenumber, $onbehalf, $aitem));

$fp = fopen("list.csv","a");

              
foreach ($list as $fields)
  {
  fputcsv($fp,$fields);
  }

fclose($fp);

$dlist = array(array($firstname, $lastname, $aitem));

$dfd = fopen("dlist.csv","a");

foreach ($dlist as $fields)
  {
  fputcsv($dfd,$fields);
  }

              
fclose($dfp); 
 ?>
    
    
</body>
</html>
