<?php
$A = 10;
$B =  12;
$C = 13; 
$D = 10;

$E = (( $A > $B ) or ( $A < $C ) ) and ( ( $A = $C) or ( $A >= $B ) );
echo var_dump ($E);

$F = (( $A >= $B ) or ( $A < $D ) ) and ( ( $A >= $D ) and ($C > $D ) ); 
echo var_dump ($F);

$G = !($A = $C ) and ( $C > $B );
echo var_dump ($G); 