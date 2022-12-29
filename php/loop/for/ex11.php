<?php
        $n = 10;   
		echo "n = " . $n . "<br>";  
		$count = 1;  
		for ($i = $n; $i > 0; $i--)  {  
		   for ($j = $i; $j < $n + 1; $j++)   
		   {  
			 printf("%4s", $count);  
			 $count++;  
		   }   
		   echo "<br>";
        }
       ?>