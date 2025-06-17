<?php
session_start();

// Caminho para a pasta principal
$baseDir = __DIR__ . '/resolucoes';

// Resetar a sessão se o botão "Reiniciar" for clicado
if (isset($_POST['resetar'])) {
    $_SESSION['pastas_sorteadas'] = [];
    header("Location: index.php");
    exit;
}

// Cria o array de pastas sorteadas se não existir
if (!isset($_SESSION['pastas_sorteadas'])) {
    $_SESSION['pastas_sorteadas'] = [];
}

// Lista as pastas dentro de 'resolucoes'
$pastas = array_filter(scandir($baseDir), function ($item) use ($baseDir) {
    return is_dir($baseDir . '/' . $item) && $item !== '.' && $item !== '..';
});

// Remove as que já foram sorteadas
$pastasDisponiveis = array_diff($pastas, $_SESSION['pastas_sorteadas']);

if (empty($pastasDisponiveis)) {
    echo "<p><strong>Todas as pastas já foram sorteadas!</strong></p>";
    echo '<form method="post"><button type="submit" name="resetar">Reiniciar Sorteio</button></form>';
    exit;
}

// Sorteia uma pasta principal
$pastaSorteada = $pastasDisponiveis[array_rand($pastasDisponiveis)];
$_SESSION['pastas_sorteadas'][] = $pastaSorteada;

// Sorteia uma das partes
$partes = ['parte1', 'parte2', 'parte3'];
$parteSorteada = $partes[array_rand($partes)];

// Caminho para a pasta da parte
$caminhoParte = "$baseDir/$pastaSorteada/$parteSorteada";

if (!is_dir($caminhoParte)) {
    echo "A parte '$parteSorteada' não existe em '$pastaSorteada'.";
    exit;
}

// Lista as subpastas da parte
$subpastas = array_filter(scandir($caminhoParte), function ($item) use ($caminhoParte) {
    return is_dir($caminhoParte . '/' . $item) && $item !== '.' && $item !== '..';
});

if (empty($subpastas)) {
    echo "Nenhuma questão encontrada em $parteSorteada de $pastaSorteada.";
    exit;
}

// Sorteia uma das questões
$questaoSorteada = $subpastas[array_rand($subpastas)];

// Exibe o resultado
echo "<h2>Pasta sorteada: <strong>$pastaSorteada</strong></h2>";
echo "<p>Parte: <strong>$parteSorteada</strong></p>";
echo "<p>Questão: <strong>$questaoSorteada</strong></p>";

// Botão para sortear novamente
echo '<form method="post"><button type="submit" name="sortear">Sortear novamente</button></form>';
echo '<form method="post" style="margin-top:10px;"><button type="submit" name="resetar">Reiniciar Sorteio</button></form>';
?>
