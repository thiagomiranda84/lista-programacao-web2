<?php
/*1- Escreva um formulário que tenha um campo do tipo checkbox que permita que sejam marcadas as frutas favoritas de um usuário. 
(Devem existir ao menos 5 frutas para serem escolhidas). Em seguida processe a informação deste formulário utilizando o comando For Each para apresentar as frutas que foram escolhidas. 
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <header>
		<h1>Formulário de Frutas Favoritas</h1>
	</header>

	<div class="container">
		<div class="box formulario">
        <h2>Escolha suas frutas favoritas:</h2>

    <form method="post" action="questao1.php">

	    <input type="checkbox" name="frutas[]" value="graviola"> Graviola<br>
	    <input type="checkbox" name="frutas[]" value="maça"> Maçã<br>
	    <input type="checkbox" name="frutas[]" value="mamao"> Mamão<br>
	    <input type="checkbox" name="frutas[]" value="siguela"> Siriguela<br>
	    <input type="checkbox" name="frutas[]" value="cereja"> Cereja<br>

	    <br><br>

	    <button name="enviar"> Enviar </button>

    </form>

		</div>
	</div>
    <?php

	if($_POST['frutas']){

		$frutas = $_POST['frutas'];

		foreach($frutas as $frutas){
			echo $frutas."<br>";
		}

	}

?>






</body>
</html>