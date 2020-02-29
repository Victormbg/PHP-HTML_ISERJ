<?php
include("index.php");
        # classe :: Calculadora
        class Calculadora {

            # Função "Calcular" para executar o cálculo dos valores (v1 e v2)
            public function Calcular() {

                # Se for setado algum valor ào submit (doCalc), executa a operação
                if (isset($_POST['doCalc'])) {

                    # Se a operação for soma (value = soma), então...
                    if ($_POST['operacao'] == "soma") {

                        # Armazena a soma de [v1 + v2] na variável $resultado
                        $resultado = $_POST['v1'] + $_POST['v2'];
echo"<span style='color:red;'>$resultado</span>";
                        # Exibe a variável $resultado com os valores já somados
                        

                        # Ou então, se a operação não for (value = soma), e sim (value = subtrai) então...
                    } elseif ($_POST['operacao'] == "subtrai") {
                        $resultado = $_POST['v1'] - $_POST['v2'];
                        echo"<span style='color:red;'>$resultado</span>";
						
                    } elseif ($_POST['operacao'] == 'multiplica') {
                        $resultado = $_POST['v1'] * $_POST['v2'];
                        echo"<span style='color:red;'>$resultado</span>";
						
                    } elseif ($_POST['operacao'] == 'divide') {
                        $resultado = $_POST['v1'] / $_POST['v2'];
                        echo"<span style='color:red;'>$resultado</span>";
						
                    } elseif ($_POST['operacao'] == "elev"){
						$resultado = $_POST['v1'] * $_POST['v2'];
						echo"<span style='color:red;'>$resultado</span>";
					}
                }
            }

        }

        # Instancia a classe CALCULADORA()
        $calcular = new Calculadora();

        # Executa a função
        echo $calcular->Calcular();
        ?>