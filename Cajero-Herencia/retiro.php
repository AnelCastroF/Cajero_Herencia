<?php
require_once ('cajero.php');

class Retiro extends Cajero{ 
    
    private $retiro;
    
    public function __construct(int $retiro) {

        parent:: __construct($saldo);
        $this->retiro = $retiro;
        
}

public function VoucherR(){
    
    $voucher = "
        <h2>-----DEPOSITO-----</H2>
        SALDO: S/{$this->saldo}<br>
        RETIRO: S/{$this->retiro}<br>
    ";

    return $voucher;

} 
public function NuevoSaldoR(){
    $nuevoSaldo = $this->saldo - $this-> retiro;
   
    return "SALDO ACTUAL:  S/ $nuevoSaldo"."<br>";
    
}
}

?>