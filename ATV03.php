<?php

$preco = 320;
$porcent = ($preco/100)*12;
$valorF = $preco + $porcent;
$parcel = $valorF/10;
echo "Valor Total da compra: $valorF \n";
echo "Valor Dividido em 10 parcelas: $parcel"

?>