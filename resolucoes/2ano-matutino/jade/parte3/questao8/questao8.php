<?php
/*8- O Instituto Nacional de Estatística precisa de um programa que calcule em quantos anos a população de uma cidade A irá ultrapassar a população de uma cidade B, considerando suas respectivas taxas de crescimento. O programa deve solicitar ao usuário o número atual de habitantes e a taxa anual de crescimento de cada cidade através de um formulário. Caso a população de A já seja maior do que a população de B, o programa deve informar que a cidade A já tem mais habitantes do que a cidade B e encerrar. Já se a taxa de crescimento de A for menor do que a taxa de crescimento de B, o programa deve informar que a cidade A não alcançará o número de habitantes da cidade B com essa taxa de crescimento.

O programa deve exibir o número de anos necessários para que a população de A ultrapasse a população de B e também a população de cada cidade ao final desse período. O usuário deverá informar os valores através de um formulário e a solução deve utilizar alguma estrutura de repetição para realizar os cálculos necessários.
Entrada: número de habitantes da cidade A: 80000, taxa anual de crescimento da cidade A (%): 3, número de habitantes da cidade B: 200000, taxa anual de crescimento da cidade B (%): 1.5
Saída: Serão necessários 63 anos para que a população da cidade A ultrapasse a da cidade B.
*/
?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>População das cidades</title>
</head>
<body>
	<form method="post" action="questao8.php">
		<h3><label>Cidade A:</label><br>
		<label>População atual:</label>
		<input type="number" name="populacaoA" required><br>
		<label>Taxa de crescimento anual (em %):</label>
		<input type="number" name="taxaA" required><br><br>

		<label>Cidade B:</label><br>
		<label>População atual:</label>
		<input type="number" name="populacaoB" required><br>
		<label>Taxa de crescimento anual (em %):</label>
		<input type="number" name="taxaB" required><br><br></h3>

		<button type="submit">Calcular</button>
	</form>

	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$populacaoA = $_POST['populacaoA'];
		$taxaA = $_POST['taxaA'] / 100;
		$populacaoB = $_POST['populacaoB'];
		$taxaB = $_POST['taxaB'] / 100;

		if ($populacaoA >= $populacaoB) {
			echo "A população de A já é maior ou igual à população de B.";
		} elseif ($taxaA <= $taxaB) {
			echo "A taxa de crescimento de A é menor ou igual à taxa de crescimento de B, portanto A nunca alcançará a população de B.";
		} else {
			$anos = 0;
			while ($populacaoA < $populacaoB) {
				$anos++;
				$populacaoA += $populacaoA * $taxaA;
				$populacaoB += $populacaoB * $taxaB;
			}

			echo "A população de A ultrapassará a população de B em $anos anos.<br>";
			echo "População de A: " . number_format($populacaoA, 0, ',', '.') . " habitantes.<br>";
			echo "População de B: " . number_format($populacaoB, 0, ',', '.') . " habitantes.";
		}
	}
	?>
</body>
</html>