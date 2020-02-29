<?php
   class Cliente{
   private $codCli;
   private $nome;
   private $email;
    private $login;
   private $senha;
   public function setCodCli($codCli){
     $this->codCli=$codCli;
   }
   public function getCodCli() {
     return $this->codCli;
   }
    public function setNome($nome){
     $this->nome=$nome;
   }
   public function getnome() {
     return $this->nome;
   }
     public function setEmail($email){
     $this->email=$email;
   }
   public function getEmail() {
     return $this->email;
   }
    public function setLogin($login){
     $this->login=$login;
   }
   public function getLogin() {
     return $this->login;
   }
  public function setSenha($senha){
     $this->senha=$senha;
   }
   public function getSenha() {
     return $this->senha;
   } 
   }
   ?>