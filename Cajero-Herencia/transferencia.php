<?php

require_once 'cajero.php';

class Transferencia extends Cajero{  
    
    protected $transferencia;

    public function __construct(int $transferencia) {
            
            parent::__construct($saldo);
            
            $this->transferencia = $transferencia;
        }

    public function VoucherT(){
    
    $voucher = "
        <h2>-----TRANSFERENCIA-----</H2>
        SALDO: S/{$this->saldo}<br>
        TRANSFERENCIA: S/{$this->transferencia}<br>
        ";
        return $voucher;
    }

    public function NuevoSaldoT(){

        $nuevoSaldo = $this->saldo - $this-> transferencia;
        
        return "SALDO ACTUAL: S/ $nuevoSaldo"."<br>";
        
    }

}


?>