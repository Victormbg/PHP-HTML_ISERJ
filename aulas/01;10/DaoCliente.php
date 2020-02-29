<?php
class DaoCliente{
 function incluir($c) {
		
         $con= mysqli_connect("127.0.0.1", "root", "", "lojaDepto");
         $sql = "Insert into Cliente (nome,email,login,senha) values(". 	 "'".			 	 
         $c -> getNome()."'  ,'".
         $c -> getemail()."'  ,'".
         $c -> getLogin()."','" .
		 $c -> getsenha()."')";
		 
         print "sql " .$sql;
          if(mysqli_query($con, $sql)) {
		     print "inserido com sucessso!!!<br>";
        	}
	    else
		   print "erro ". mysqli_error($con);

			
       } //fim da funcao incluir
}
	   ?>