<?php
require_once 'cajero.php';
require_once 'transferencia.php';
require_once 'retiro.php';


$saldo = new Cajero(500);
$transferencia = new Transferencia(100);
$retiro = new Retiro(300);

echo $saldo->Saldo();
echo "<br>";

echo $transferencia->VoucherT();
echo $transferencia ->NuevoSaldoT();
echo "<br>";

echo $retiro->VoucherR();
echo $retiro ->NuevoSaldoR();
echo "<br>";



?>