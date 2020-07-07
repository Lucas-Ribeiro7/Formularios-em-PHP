<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <?php
            $nome = isset($_POST["nome"]) ? $_POST["nome"] : "Nome não Informado.";
            $ano = isset($_POST["ano"]) ? $_POST["ano"] : "Idade não informado.";
            $sexo = isset($_POST["sexo"]) ? $_POST["sexo"] : "Sexo não Informado.";
            $idade = date("Y") - $ano;
            echo "Olá $nome, soube que você é $sexo. De acordo com os meus cálculos vc tem $idade anos";
        ?>
    
    <a href = "formulario2.html">Voltar</a>
</div>
  
</body>
</html>

