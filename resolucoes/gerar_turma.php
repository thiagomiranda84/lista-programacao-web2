<?php

$turmas = ["2ano-matutino","2ano-vespertino","3ano-matutino","3ano-vespertino" ];
$i = $_GET["turma"] ?? 0;
$turma = $turmas[$i];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Alunos</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Alunos - <?=$turma?></h1>
	</header>
	<div class="container">
		<div class="box resposta">
        <?php

           

            $pastas = scandir($turma);


            $aluno = [];

            array_multisort($pastas);

           
            foreach($pastas as $pasta){
                if($pasta != ".gitkeep" && $pasta != "." && $pasta != ".."){
                
                    $p = "./".$turma."/".$pasta;
                    echo "<li class='lista'> {$pasta} ";
                    $partes = ["parte1","parte2","parte3","parte4"];
                    $nota = 0;
                    
                    foreach($partes as $parte){

                    $questoes = scandir($p."/".$parte);
                    $aluno = [];
                    $aluno[$parte] = [];
                  
                    
                    echo "<h3>{$parte}</h3>";
                    foreach($questoes as $questao){
                        if($questao != ".gitkeep" && $questao != "." && $questao != ".." && is_dir($p."/{$parte}/". $questao)){
                            

                            $arquivos = scandir($p."/{$parte}/". $questao);
                            $contador = 0;
                            foreach($arquivos as $arquivo){
                                $dadosarquivo = explode(".",$arquivo);
                                $extensao = end($dadosarquivo);
                                //echo $extensao."<br>";
                                if($arquivo != ".gitkeep" && $arquivo != "." && $arquivo != ".." && is_file($p."/{$parte}/".$questao."/". $arquivo) && ($extensao == "php" || $extensao == "PHP")){
                                    $contador++;
                                }
                            }
                            $aluno[$parte][] = ["questao" => $questao, "arquivos" => $contador];
                            if($contador > 0){
                                $nota = $nota + 0.5;
                            }
                            
                           


                        }
                    }
                    
                    foreach($aluno[$parte] as $q){
                        
                        echo "<h4>{$q["questao"]} - {$q["arquivos"]} Arquivos</h4>";
                        
                    }

                }
                    
                  echo "<h4>Nota: $nota</h4>";
                  echo "</li>";
            
            }
            }
        

    ?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>











