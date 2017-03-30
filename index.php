<?php

function autoload($class) {
    require $class . ".php";
}

spl_autoload_register("autoload");

$conta = new Conta("João da Silva", 1500.0);
$cadeia = new Cadeia();

echo "<h2>XML</h2>";
$req = new Requisicao(Formato::$XML);
$cadeia->iniciar($req, $conta);

echo "<h2>CSV</h2>";
$req = new Requisicao(Formato::$CSV);
$cadeia->iniciar($req, $conta);

echo "<h2>Porcento</h2>";
$req = new Requisicao(Formato::$PORCENTO);
$cadeia->iniciar($req, $conta);

echo "<h2>Indefinido</h2>";
$req = new Requisicao("xml");
$cadeia->iniciar($req, $conta);