<?php
        function ham_dao_nguoc_chuoi($str1)  
		{  
		 $n = strlen($str1);  
		 if($n == 1)  
		 {  
			return $str1;  
		 }  
		 else  
		 {  
		   $n--;  
		   return ham_dao_nguoc_chuoi(substr($str1,1, $n)) . substr($str1, 0, 1);  
		 }  
		}  
		print_r(ham_dao_nguoc_chuoi('123456789')."<br>");
       ?>