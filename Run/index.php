<html>
<head>
<title> Calculadora </title>
<meta charset="utf-8"></head>
<link href="estilo.css" rel="stylesheet">
<body>
<h1>Calculadora</h1>

        <form method="POST" action="script2.php">
    
            <input type="text" name="v1" placeholder="valor 1" />
                <select name="operacao">
                <option value="soma">+</option>
                <option value="subtrai">-</option>
                <option value="multiplica">*</option>
                <option value="divide">/</option>
				<option value="elev">^</option>
            </select>

            <input type="text" name="v2" placeholder="Valor 2" />

            <input type="submit" name="doCalc" value="Calcular" />
        </form></body></html>