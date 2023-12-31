<?php

class Cajero{
    
    public $saldo;
    
    public function __construct(int $saldo){
        $this->saldo = $saldo;
    }
  
    public function Saldo(){
    
        $voucher = "
            <h2>-----DEPOSITO-----</H2>
            SALDO: S/{$this->saldo}<br>
        ";
    
        return $voucher;
    }

}

?>