<?php

        class Calculadora {

            
            public function Calcular() {

                
                if (isset($_POST['doCalc'])) {

               
                    if ($_POST['op'] == "+") {

               
                        $resultado = $_POST['num1'] + $_POST['num2'];

                    
                        return $resultado;

                 
                    } elseif ($_POST['op'] == "-") {
                        $resultado = $_POST['num1'] - $_POST['num2'];
                        return $resultado;
						
                    } elseif ($_POST['op'] == 'x') {
                        $resultado = $_POST['num1'] * $_POST['num2'];
                        return $resultado;
						
                    } elseif ($_POST['op'] == '/') {
                        $resultado = $_POST['num1'] / $_POST['num2'];
                        return $resultado;
                    } 
                }
            }

        }

     
        $calcular = new Calculadora();

        echo $calcular->Calcular();
        ?>