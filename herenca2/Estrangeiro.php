<?php
include("Produto.php");
class Estrangeiro extends Produto{
  var $pais;
  var $taxa;
 function setPais($pais) {
   $this->pais=$pais;
   }
function getPais() {
    
    return $this->pais;
 }	
//
 function setTaxa($taxa) {
   $this->taxa=$taxa;
   }
function getTaxa() {
    
    return $this->taxa;
 }	   
 }
 ?>