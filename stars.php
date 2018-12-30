<?php

$space = 11;

for($i=0; $i<=5; $i++){
           
    $space = $space - 2;
    
  if($space < 0){
        echo str_repeat('-', $i)."*".str_repeat('-', $i);
       echo "<br>";
        
        for($j=5; $j > 0; $j--){
             $space = $space + 2; // med zvezdicam 
              $b = $j-1; // okol zvezdic 
            echo str_repeat('-', $b)."*".str_repeat('-', $space)."*".str_repeat('-', $b);
            echo "<br>";
        }
     
       exit;
    }
    
    echo str_repeat('-', $i)."*".str_repeat('-', $space)."*".str_repeat('-', $i);
   
    echo "<br>";
}



