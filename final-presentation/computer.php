
<html>
<?php
  $i = 0;
  for($i = 1;$i<51;$i++){
    if( $i != 12 & $i != 19 & $i != 38 & $i != 39 & $i != 41 & $i != 42 & $i != 44 & $i != 47 ){
      echo"<img src=\"img/comp";
      echo $i;
      echo ".jpg\" alt=\"Image not found\" height=\"400\" width=\"400\">";
      for($j = 0;$j<10;$j++){
        echo "\n";
      }
    }
  }
  ?>
</html>
