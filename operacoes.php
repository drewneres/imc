<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Números</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Cálculo de Números</h1> 
        <div class="container">
        <div class="d-flex justify-content-center" style="height: 30vh;">
            <img src="einstein.jpg" class="img-fluid" alt="Imagem Responsiva">
        </div>
        </div>
        <form method="POST" action="operacoes.php">
            <div class="form-group">
                <label for="num1">Número 1:</label>
                <input required type="number" class="form-control" id="num1" name="num1" />
            </div>
            <div class="form-group">
                <label for="num2">Número 2:</label>
                <input required type="number" class="form-control" id="num2" name="num2" />
            </div>
            <div class="form-group">
                <label for="num3">Número 3:</label>
                <input required type="number" class="form-control" id="num3" name="num3" />
            </div>
            <div class="form-group">
                <label for="num4">Número 4:</label>
                <input required type="number" class="form-control" id="num4" name="num4" />
            </div>
            <button type="submit" class="btn btn-primary mt-2">Calcular</button>
            <button type="button" class="btn btn-secondary mt-2" id="btnPreencher">Preencher Aleatoriamente</button>
        </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> <
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#btnPreencher').click(function() {
                $('#num1').val(Math.floor(Math.random() * 100)); //gera um número aleatório entre 0 e 100
                $('#num2').val(Math.floor(Math.random() * 100));
                $('#num3').val(Math.floor(Math.random() * 100));
                $('#num4').val(Math.floor(Math.random() * 100));
            });
        });
    </script>
</body>

</html>



<?php


if (isset($_POST['num1'], $_POST['num2'], $_POST['num3'], $_POST['num4'])) {
    $arrayNumeros = array($_POST['num1'], $_POST['num2'], $_POST['num3'], $_POST['num4']); //cria um array com os números recebidos

    $soma = array_sum($arrayNumeros);

    $quantidade = count($arrayNumeros);


    $media = $soma / $quantidade;

    $maior = max($arrayNumeros);

    $menor = min($arrayNumeros);


    function mediaPares($arrayNumeros) //função para calcular a média dos números pares
    {
        $numerosPares = array();
        foreach ($arrayNumeros as $numero) {
            if ($numero % 2 == 0) {
                array_push($numerosPares, $numero);
            }
        }
        $mediaPares = (count($numerosPares) > 0) ? array_sum($numerosPares) / count($numerosPares) : 0; //se o array não estiver vazio, calcula a média, senão, retorna 0
        return $mediaPares;
    }

    $numerosPares = array_filter($arrayNumeros, function ($numero) {
        return $numero % 2 == 0;
    });
    $mediaPares = 0;
    if (count($numerosPares) > 0) {
        $mediaPares = array_sum($numerosPares) / count($numerosPares);
    }


    echo "<h2>&nbsp Resultados:</h2>";
    echo "&nbsp&nbsp a) Soma dos números: $soma <br/>";
    echo "&nbsp&nbsp b) Quantidade de números: $quantidade <br/>";
    echo "&nbsp&nbsp c) Média dos números: $media <br/>";
    echo "&nbsp&nbsp d) Maior número: $maior <br/>";
    echo "&nbsp&nbsp e) Menor número: $menor <br/>";
    echo "&nbsp&nbsp f) Média dos números pares: " . mediaPares($arrayNumeros) . " <br/>";
    echo "<br/> <br/> <br/>";
}






?>