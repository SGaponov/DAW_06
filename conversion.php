<?php
class Conversion
{
    private $monto = 0;

    //los metodos get y set
    public function getMonto(){
      return $this->monto;
    }
    public function setMonto($monto){
      $this->monto = $monto;
    }

    /*metodo que calcula la conversion de euros a libras
    tipo de cambio 1 EUR = 0.88 GBP*/
    public function exchangeEurGbp(){
      $libras = $this->monto * 0.88;
      return $libras;
    }
    /*metodo que calcula la conversion de libras a euros
    tipo de cambio 1 GBP = 1.13 EUR*/
    public function exchangeGbpEur(){
      $euros = $this->monto * 1.13;
      return $euros;
    }
    /*metodo que calcula la conversion de euros a dolares americanos
    tipo de cambio 1 EUR = 1.25 USD*/
    public function exchangeEurUsd(){
      $usd = $this->monto * 1.13;
      return $usd;
    }
    /*metodo que calcula la conversion de dolares americanos a euros
    tipo de cambio 1 EUR = 0.80*/
    public function exchangeUsdEur(){
      $euros = $this->monto * 0.80;
      return $euros;
    }
}

 ?>
