<?php  
	$brigadeiros = $_GET["brigadeiros"]?? 12;
	$cajuzinhos = $_GET["cajusinhs"]?? 18;
    
    $fator = 2;

	$mdc = 1;

	while ($brigadeiros != 1 && $cajuzinhos != 1) {

		if ($brigadeiros % $fator == 0 && $cajuzinhos % $fator ==0) {
			$brigadeiros /= $fator;
			$cajuzinhos /= $fator;
			$mdc *= $fator;
		}else if ($cajuzinhos % $fator ==0){
			 
			$cajuzinhos /= $fator;
			$mdc *= $fator;
				
		}elseif ($brigadeiros % $fator ==0) {
			$brigadeiros /= $fator;
			$mdc *= $fator;
				
		}else {
			if ($fator == 2) {
				$fator++;
			}elseif ($fator == 3) {
				$fator = 5;
			}elseif ($fator == 5) {
				$fator = 7;
			}
		}
		

	}
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
                
                echo "<br>O MDC correspondente aos numeros ".$cajuzinhos." e ".$brigadeiros." é ". $mdc. "<br>";
            ?>
			<a href="festa.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>