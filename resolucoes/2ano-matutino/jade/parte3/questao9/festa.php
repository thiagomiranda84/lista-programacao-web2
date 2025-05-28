<?php
/*

9- Joana está preparando kits de doces para distribuir entre alguns convidados. Há brigadeiros e cajuzinhos. Ela quer separá-los em pratos de modo a ocupar a menor quantidade de pratos mas, que todos os pratos tenham a mesma quantidade de doces e sem misturá-los. A quantidade de doces que Joana deverá colocar em cada prato será definida através do cálculo do Máximo Divisor Comum (MDC). O MDC (Maior Divisor Comum) de dois números inteiros positivos é o maior número que pode dividir ambos os números sem deixar o resto. Por exemplo, o MDC entre 12 e 18 é 6, pois 6 é o maior número que pode dividir tanto 12 quanto 18 sem deixar o resto. Escreva um programa que recebe através de um formulário o número de brigadeiros e o número de cajuzinhos que serão feitos e retorne a quantidade de pratos que serão utilizados.
Dica de como resolver:

Para saber o MDC dos números, devemos olhar à direita da fatoração e ver quais números dividiram, simultaneamente, nas duas colunas e multiplicá-los.
Como resolver:
Inicialize dois números inteiros, cajuzinhos e brigadeiros, com os valores dos números a serem encontrados o MDC.
Inicialize uma variável, fator, com o valor 2, que será o menor número primo a ser testado.
Inicialize uma variável, mdc, com o valor 1, que será o maior divisor comum entre cajuzinhos e brigadeiros.
Enquanto cajuzinhos e brigadeiros não forem iguais a 1, faça:
Verifique se cajuzinhos é divisível por fator e brigadeiros é divisível por fator. Se sim, divida cajuzinhos por fator e divida brigadeiros por fator e atualize mdc multiplicando-o por fator.
Caso cajuzinhos e brigadeiros não sejam divisíveis for fator ao mesmo tempo. Verifique se cajuzinhos é divisível por fator. Se sim, divida cajuzinhos por fator e atualize o valor de cajuzinhos.
Caso cajuzinhos e brigadeiros não sejam divisíveis for fator ao mesmo tempo. Verifique se brigadeiros é divisível por fator. Se sim, divida brigadeiros por fator e atualize o valor de brigadeiros.
Se cajuzinhos  e brigadeiros não são divisíveis por fator, aumente o valor de fator para o próximo número primo.
Ao fim da repetição retorne o valor de mdc, que será o maior divisor comum entre cajuzinhos e brigadeiros.

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

			<form action="receber1.php" method="get">

				
				<label> Brigadeiros
					<input type="number" name="brigadeiros"  value = '12'>
				</label>
				
				<label> Cajuzinhos
					<input type="number" name="cajuzinhos"  value = '18'>
				</label>
				<br><br>
				


				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>