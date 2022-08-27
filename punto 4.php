<?php
$A = 20;
$B = $A;
$C = 15;
$D = 10;

$E = (( $A = $B ) or ( $B > $c ) ) or ( $c < $d );
echo var_dump ($E);
