<?php
function sum($studentName, $bangla,$english,$math){

    $result = $bangla + $english + $math;
echo " $studentName marks is = $result ";
echo "</br>"."</br>";  
}
sum('razia',50,70,60);
sum('liya',56,87,60);
sum('anamika',52,73,68);
sum('ananya',59,56,45);
sum('sumaiya',57,70,66 ) ; 



function charm(int $x, int $y) {            // 2nd function  
  $z = $x * $y;
  echo " result = $z";
  echo "<br> . <br> ";
}
 charm(5, 10) ;
 charm(7, 13) ;
 charm(2, 4) ."<br> " ;




function printing($capital){      // 3rd function  
    echo strtoupper($capital) ;
    echo "</br> ";
}
printing('razia');
printing('liya');
printing('ananya');
printing('anmika');
printing('sumaiya'."</br> " ."</br> ");




function familyName($fname, $year) {            // 4th function  
    echo "$fname Born in $year <br>";
  }
  
  familyName("shajahan", "1975");
  familyName("jaheda", "1988");
  familyName("razia", "2003"."</br> " ."</br> " );


 
  
  function setHeight(int $minheight = 50) {             // 5th function   
    echo "The height is : $minheight ";
    echo  "<br> " ."</br>";
  }
  
  setHeight(350);
  setHeight(); 
  setHeight(200);
  setHeight(800) ;
  

   


  function add(int $x, int $y) {            // 6th function  
  $z = $x + $y;
 return $z;
}
echo "5 + 10 = " . add(5, 10) . "<br>";
echo "7 + 13 = " . add(7, 13) . "<br>";
echo "2 + 4 = " . add(2, 4)  ."<br>"  . "</br> ";



function sub(int $x, int $y) {            // 7th function  
  $z = $x - $y;
  echo " difference = $z";
  echo "<br>"  . "</br> ";
}
 sub(55, 10) ;
 sub(77, 13) ;
 sub(20, 4)  ;





 function squre(int $x, int $y) {            // 8th function  

  $z = $x ** $y;
  echo " result = $z";
  echo "</br> " ."</br>";
}
 squre(5, 2) ;
 squre(6, 3) ;
 squre(8, 4) ;



 
 function div(int $a, int $b , int $c ) {            // 9th function  
  $z = $a / $b * $c;
  echo " Ans = $z";
  echo "<br>" ;
}
 div(6,2,2) ;
 div(10,2,2) ;
 div(2,2,2) ;