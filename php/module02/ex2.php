<?php
        function ham_tinh_giai_thua($n)  
		{  
		  if($n ==0)  
			{  
			   return 1;  
			}  
		  else   
			{     
			   return $n * ham_tinh_giai_thua($n-1);  
			}  
			}  
		echo "100! = " .ham_tinh_giai_thua(100)."<br>"
       ?>