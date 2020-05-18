<?php
// 
    $total = 0; $i = 1; 

    while ($i < 10)
    {
        if ($i==1) break;

        $total += $i;
        $i++; //$i+ = 1; //$i = $i+1;
    }

    echo 'SUM (1-10) : '.$total;

    echo "selesai";
    
    $age = 12;
    if ($age>= 17 && $age <35) :

        echo "Masih Muda";
    else: 
        echo "sudah berumur";
    endif;
// 
     $i = 1;
     while ($i <= 49)
     {
         if ($i % 2 == 0)
            echo ($1. "<br>");

         $i++;
     }
?>