<?php
$A = (3 * 2 - 4 / 2 * 1) > (3 * 2 + 2 * 1) and (5 > 11 % 4); 
echo var_dump ($A);

$B = (3 >= 3 or 5 <> 5) and ! (15 / 5 + 2 <> 5); 
echo var_dump($B);

$C = !(! ((3 * (- 3)) * 2 > (3 -(- 3 ) * 2 ) or 1 ^ 3 * 2 > 6 ) );
echo var_dump($C);

$D = (3 >= 4 and 5 > 3 and 3 > 3) or  !(4 <= 4 or 5 > 4 or 6 >= 7);
echo var_dump ($D); 


