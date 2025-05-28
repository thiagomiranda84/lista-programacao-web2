<?php

/*5- Vamos criar um jogo de par ou ímpar! Crie um formulário em que o usuário possa selecionar um número de 0 a 10 e escolher entre as opções "Par" ou "Ímpar". Ao clicar no botão "Jogar", o programa irá sortear um número entre 0 e 10, e então verificar se a soma dos números é par ou ímpar. Em seguida, o programa deve determinar quem venceu com base na escolha do usuário.
Exemplos:
Entrada: Número: 2, Escolha: Par
Saída: O usuário escolheu par e o número 2. O computador sorteou o número 3, e a soma deles é 5. 5 é ímpar e o computador venceu.
Entrada: Número: 3, Escolha: Par
Saída: O usuário escolheu par e o número 3. O computador sorteou o número 3, e a soma deles é 6. 6 é par e o usuário venceu.
 */

    $num = $_POST['num'] ?? 0;
    $escolha = $_POST['escolha'] ?? 0;
    $num_aleatorio = rand(1, 10);
    $soma = $num + $num_aleatorio;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<h1>Jogo do Par ou Ímpar</h1>

<h2><form action="questao5.php" method="post">
    <label>Digite um número de 1 a 10:</label>
    <input type="number" name="num" required min="1" max="10">

    <label>Escolha par ou ímpar:</label>
    <input type="radio" name="escolha" value="par" required> Par
    <input type="radio" name="escolha" value="impar" required> Ímpar <br><br>

    <button name="jogar">Jogar</button></h2>
</form>

<?php
    if (($soma % 2 == 0 && $escolha == 'par') || ($soma % 2 != 0 && $escolha == 'impar')) {
        echo "<h3>Você escolheu {$num} e o computador escolheu {$num_aleatorio}. A soma é {$soma}. Você ganhou!</h3>";
    } else {
        echo "<h3>Você escolheu {$num} e o computador escolheu {$num_aleatorio}. A soma é {$soma}. Você perdeu!</h3>";
    }

?>
</body>
</html>


