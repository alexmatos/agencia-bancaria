<?php

require '../Conta.php';

function importa($classes) {
    require $classes . ".php";
}

spl_autoload_register("importa");

$contas = array();
$contas[] = new Conta("João da Silva", "123-4", "987654-3", 210.0, date('d/m/Y'));
$contas[] = new Conta("Maria de Souza", "123-4", "123456-7", 8000.0, date('d/m/Y', strtotime('2016-04-01')));
$contas[] = new Conta("Carlos Abreu", "456-7", "456789-0", 897.1, date('d/m/Y', strtotime('2015-11-25')));
$contas[] = new Conta("Luana", "555-5", "666687-9", 35.1, date('d/m/Y', strtotime('2017-02-20')));

$filtrosUtilizados = new SaldoMenorQue100(new SaldoMaiorQue5mil(new ContasAbertasNoMesCorrente()));
$resultado = $filtrosUtilizados->filtra($contas);

var_dump($resultado);
echo "<br>";
foreach ($resultado as $conta) {
    echo '<br>' . $conta->getTitular();
}
