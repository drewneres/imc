<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>IMC Calculadora</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'>
</head>
<body>
    <?php
        $peso= $_POST['peso'];
        $altura= $_POST['altura'];
        $imc= $peso/pow($altura,2);
        echo "<h1 class='text-center'>Resultado</h1>";
        echo "<input type='text' class='form-control col-6 mx-auto'";
        if($imc<=18.5){
            echo "<input type='text' class='form-control col-6 mx-auto' value=".$imc.">";
            echo "<h3 class='text-center'>Abaixo do peso</h3>";       
        }
        elseif($imc>=18.5 and $imc<=25){
            echo "<input type='text' class='form-control col-6 mx-auto' value=".$imc.">";
            echo "<h3 class='text-center'>Peso normal</h3>";   
        }
        elseif($imc>25 and $imc<=30){
            echo "<input type='text' class='form-control col-6 mx-auto' value=".$imc.">";
            echo "<h3 class='text-center'>Acima do peso</h3>";   
        }
        else{
            echo "<input type='text' class='form-control col-6 mx-auto' value=".$imc.">";
            echo "<h3 class='text-center'>Obeso</h3>";   
        }
    ?>

    <a button class="btn btn-secondary " href="index.html">Voltar</a>
</body>
</html>