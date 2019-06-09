<html>
<head
<link rel="stylesheet" type="text/css" heref="tab.css">
<title> Calculadora - form de entrada</title>
</head>
<body bgColor="Aquamarine"> 
<h1><center>Calculadora - Menu de opções</h1></center>
<form name="frmentra" method="post" action="umCalculo.php" />

<table name="tabela" border="2" borderColor='red' bgcolor="green">
<tr>
<td>
            Operando 1
</td>
<td>
 Operando 2
</td>
</tr>
<tr>			
<td>			
            <input  type="number" name="tOp1" />
</td>   

<td>        
            <input type="number" name="tOp2" />
 </td>       
 </tr>
 <tr>
 <td>MENU DE OPÇÕES
 </td>
 
 </tr>
 <tr height="20px" width="15px"><td  >
            <button type="submit" name="btn1" value="soma">Soma</button>
</td>
<td>		    
			<button type="submit" name="btn1" value="subi">Subtração</button>
</td>
<td>			
			<button type="submit" name="btn1" value="mult">Multiplicação</button>
</td>
<td>		    
			<button type="submit" name="btn1" value="quad">Quadrado</button>
</td>
<td>		    
			<button type="submit" name="btn1" value="raiz">Raiz</button>
</td>
<td>		    
			<button type="submit" name="btn1" value="divi">Divisão</button>
</td>
<td>			
			<input type="reset" name="bt2" value="Limpa"/>
</td>
<tr>
</table>

			</form>
