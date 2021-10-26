<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cartelas</title>
</head>
<body>
<pre>
<?php
    $qtd = $_POST['qtd'];
    $i = 0;
    do{
        $cart[$i] = rand(1, 75); //Sorteia um número entre 1 e 75
        $rep = 0;
        for ($j=0; $j < $i; $j++){ //Percorre o vetor com os valores já adicionados
            if ($cart[$j] == $cart[$i]){
                $rep = 1; //Se repetir,
            }
        }
        if ($rep == 0){ //Caso o número não se repita
            $i++;
        }
    }while($i < 25); //Enquanto não sortear 25 números diferentes
?>
</pre>
</body>
</html>



