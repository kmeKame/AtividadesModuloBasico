<?php
/* Salvei todos os 12 meses em uma lista e guardei ela
em uma variável para ser usada mais tarde*/

$mes = ["Janeiro", "Fevereiro", "Março",
"Abril","Maio", "Junho", "Julho", "Agosto", "Setembro",
"Outubro", "Novembro", "Dezembro"];

$numMes = 8;

if ($numMes >= 1 && $numMes <= 12) {
  
  /*a variavel armazena um número e esse número irá setar uma posição para ser lida, e
  o mês que estiver nessa posição será mostrado na tela.*/
  
  echo $mes[$numMes -1];

  /* a expressão -1 faz com que uma casa na posição seja subtraída, como a contagem começa em 0, sem
  omenos 1 o mês seria sempre um mês a frente do que deveria ser relacionado*/
}
else {
    echo "Mês Inválido.";
}
?>
