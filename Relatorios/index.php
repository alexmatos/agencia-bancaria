<?php

require "..\Conta.php";

function autoload($class) {
    require $class . ".php";
}

spl_autoload_register("autoload");

$contas = array();
$contas[] = new Conta("João da Silva", "123-4", "987654-3", 210.0);
$contas[] = new Conta("Maria de Souza", "123-4", "123456-7", 1500.0);
$contas[] = new Conta("Carlos Abreu", "456-7", "456789-0", 35.1);

echo "<h2>Relatório Simples</h2>";
$relatorioSimples = new RelatorioSimples();
$relatorioSimples->imprimir($contas);

echo "<h2>Relatório Complexo</h2>";
$relatorioComplexo = new RelatorioComplexo();
$relatorioComplexo->imprimir($contas);
