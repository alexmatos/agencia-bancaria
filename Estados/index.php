<?php

require '../Conta.php';

function importa($classes) {
    require $classes . ".php";
}

spl_autoload_register("importa");

$conta1 = new Conta("João da Silva", "123-4", "987654-3", 210.0, date('d/m/Y'));
$conta2 = new Conta("Maria de Souza", "123-4", "123456-7", -100.0, date('d/m/Y', strtotime('2016-04-01')));

echo "<h2>Saques</h2>";
echo $conta1->getSaldo() . " - " . $conta1->getEstado();
$conta1->saque(300);
echo "<br>Saca R$ 300: " . $conta1->getSaldo() . " - " . $conta1->getEstado();

echo "<br>" . $conta2->getSaldo();
$conta2->saque(100);
echo "<br>Saca R$ 100: " . $conta2->getSaldo() . " - " . $conta1->getEstado();

echo "<h2>Depositos</h2>";
echo $conta1->getSaldo() . " - " . $conta1->getEstado();
$conta1->deposita(200);
echo "<br>Deposita R$ 200: " . $conta1->getSaldo() . " - " . $conta1->getEstado();

echo "<br>" . $conta2->getSaldo() . " - " . $conta2->getEstado();
$conta2->deposita(200);
echo "<br>Deposita R$ 200: " . $conta2->getSaldo() . " - " . $conta2->getEstado();
$conta2->deposita(100);
echo "<br>Deposita R$ 100: " . $conta2->getSaldo() . " - " . $conta2->getEstado();