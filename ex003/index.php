<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>

<body>
    <h1>Teste tipos primitivos</h1>
    <?php 
    // 0x = hexadecimal 0b = binário 0 = 0ctal 
    // $num = 010;
    // echo "o valor da variável é $num";

    // $valor = 45.2;
    // var_dump($valor); // me retorna o valor e o tipo da variavel

    // $num = (int) "123"; // coercao de tipo
    // var_dump($num);

    // $casado = true;
    // echo "O valor para casado é $casado"; // retorna 1 ou vazio 


    // $vetor = [1, 2.3, "BH", true]; // array
    // var_dump($vetor);

    class Pessoa {
        private string $nome;
    }

    $p = new Pessoa;
    var_dump($p);
    ?>
</body>

</html>