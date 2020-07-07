<!DOCTYPE html>
<html lang="pt">
<head>
        <?php
            $texto = isset($_POST["t"]) ? $_POST["t"] : "Texto não informado.";
            $tamanho = isset($_POST["tam"]) ? $_POST["tam"] : "Tamanho não informado";
            $cor = isset($_POST["cor"]) ? $_POST["cor"] : "Cor não informado."; 
        ?>
    <style>
        span{
            font-size: <?php echo $tamanho;?>;
            color: <?php echo $cor;?>;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURSO EM VIDEO - AULA 08</title>
</head>
<body>
<div>
        <?php
              echo "<span>$texto</span>";
        ?>
    <a href = "formulario3.html">Voltar</a>
</div>
  
</body>
</html>