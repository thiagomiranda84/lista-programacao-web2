<?php
/*

5- Um atleta de corrida de rua está treinando para uma maratona. Ele correu 10 km em 45 minutos no primeiro dia e quer aumentar sua velocidade para conseguir completar a maratona 
em menos de 4 horas. Crie um formulário que receba a distância que ele quer percorrer e o tempo que ele quer completar a prova e calcule a velocidade média que ele precisa 
atingir em km/h usando PHP. 
Exemplo:
Entrada: distância = 42 km, tempo = 4 horas. 
Saída esperada: velocidade média = 10.5 km/h.

*/

?>
<!DOCTYPE html>
<html> 
<head>
	<meta charset="UTF-8"> 
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		
	</header>
	<div class="container">
		<div class="box formulario">

			<h2>Calculadora de velocidade</h2>

			<form action="receber1.php" method="get">

				<label>Distancia a ser percorrida
					<input type="number" name="distancia" required step = "0.1" value = "42">
				</label>
				<label>Eficiência do automóvel por litro
					<input type="number" name="tempo" required step = "0.1" value = "4">
				</label>


				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>