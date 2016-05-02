<?php
$a=2;
$b=0;
$operator="/";
    switch ($operator){
      case "+";
        echo $a+$b;
        break;
      case "-";
        echo $a-$b;
        break;
      case "*";
        echo $a*$b;
        break;
      case "/";
        if ($b!=0){echo $a/$b;}
        else {echo  "на 0 делить нельзя";}
        break;
      case "%";
        echo ($a/$b)*100;
        break;
    }
?>