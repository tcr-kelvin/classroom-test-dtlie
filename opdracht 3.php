<?php
 class kassabon{
  public $wasmachine;
  public $droger;
  public $koelkast;

  public function __construct($wasmachine, $droger, $koelkast){
      $this->wasmachine = $wasmachine;
      $this->droger = $droger;
      $this->koelkast = $koelkast;
  }
   public function prijs_inc_btw(){
    return $this->wasmachine + $this->droger + $this->koelkast * 1.21;
   }
   public function prijs_ex_btw(){
    return $this->wasmachine + $this->droger + $this->koelkast;
   }
}
$kassabon = new kassabon($wasmachine = $_POST["wasmachine"], $droger = $_POST["droger"], $koelkast = $_POST["koelkast"]);
 echo "Today is ". date("Y/m/d");
 echo "<br>"
 echo "Wasmachine prijs ". "$wasmachine <br>";
 echo "Droger prijs ". "$droger <br>";
 echo "Koelkast prijs ". "$koelkast <br>";
 echo "<br>";
 echo "prijs exclusief btw ", $kassabon->prijs_ex_btw();
 echo "<br>";
 echo "prijs inclusief btw ", $kassabon->prijs_inc_btw(); 
    