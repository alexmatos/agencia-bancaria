<?php

require "..\Conta.php";

function autoload($class) {
    require $class . ".php";
}

spl_autoload_register("autoload");

$conta = new Conta("Maria de Souza", "123-4", "123456-7", 1500.0);

echo "<h2>Investimento Conservador</h2>";
$investimento = new RealizadorDeInvestimentos();
echo round($investimento->realiza($conta, new Conservador()),2);

echo "<h2>Investimento Moderador</h2>";
$investimento2 = new RealizadorDeInvestimentos();
echo round($investimento2->realiza($conta, new Moderado()),2);

echo "<h2>Investimento Arrojado</h2>";
$investimento3 = new RealizadorDeInvestimentos();
echo round($investimento3->realiza($conta, new Arrojado()),2);