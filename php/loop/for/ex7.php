<?php

echo 123;

?>
<table width="100%" cellspacing="0" cellpadding="0" style="border: 1px solid red; height: 30px; 
" >  
      

    <?php  
    $alphaLoop = "";
    
    for($row=1; $row <= 8; $row++) {
        $alphaLoop .='<td style="text-align: center;">'.$row.'</td>';
    }
    echo '<tr style="height:30px;">'.$alphaLoop.'</tr>';


    $index = 8;
    for ($row1 = 1; $row1<=8; $row1++){
        echo '<tr>';

        echo '<td style="text-align: center;">'.$index.'</td>';
            for ($col = 1; $col<=7; $col++) {
                    $total = $row1 + $col;
                    if ($total % 2 == 0) {
                        echo '<td style="background: #fff; width: 12%; height: 100px;">aaa</td>';
                    }else {
                        echo '<td style="background: #000; width: 12%; height: 100px;">bbbb</td>';
                    }
            }
        echo '</tr>';
        $index--;
    }   1
    ?>  
</table>
     