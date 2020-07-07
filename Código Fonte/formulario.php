<!DOCTYPE html>
<html>
<head>
    <title>CURSO EM VIDEO - AULA 08</title>
</head>
<body>
    <div>
        <?php
            $valor = $_POST["valor"];
            $rq = sqrt($valor);
            echo "A raiz quadrada do $valor é " . number_format($rq,2);
        ?>
        <a href = "formulario.hmtl">Voltar</a>
    </div>
    <br>
</body>
</html>