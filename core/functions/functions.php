<?php
function real_format($valor)
{
     $valor  = number_format($valor, 2, ",", ".");
     return "R$ " . $valor;
}

function primeiraFuncao (){
     return "Sua primeira função";
}