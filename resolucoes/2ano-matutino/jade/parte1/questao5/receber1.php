<?php  
    $distancia = $_GET["distancia"] ?? 42;
	$tempo = $_GET["tempo"] ?? 4;

	$velocidade = $distancia / $tempo;

	$velocidade_atual = 10 / 0.45;
	
    
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
		<div class="box resposta">
			<h2>Resultado</h2>
            <?php 
                
                echo "<br>A velocidade que ele atingiu foi de ". $velocidade_atual . "km/h<br>";
				echo "<br>Para que leve menos de quatro horas é nescessário que ele ultrapasse a velocidade de ". $velocidade . "km/h<br>";
            ?>
			<a href="atleta.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>