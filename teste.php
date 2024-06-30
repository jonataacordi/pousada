<?php
$dia = '01';        //Dia primeiro
$mes = 12;          //Dezembro
$ano = date("Y");   //2010
//Agora vamos adicionar, 40 dias (10/01/2011)
echo date("d/m/Y", mktime(0, 0, 0, $mes, ($dia + 40), $ano ));

?>