<?php
$A = 33;
$B = !(($A>10) and ($A<20)); 
$C = !(($A>10) or ($A<20));
echo var_dump ($C);
echo "<br>";
echo var_dump($B);
