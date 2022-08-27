<?php
$M = 8;
$N = 9;
$R = 5;
$S = 5;
$T = 4;
$V = 77;

$A = !(($M > $N and $R > $S ) or ( ! ( $T < $V and $S > $M ) ) );
echo var_dump ($A);


