<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>

</head>
<body>
    

<button> "<a href='cadastro.html'> Realizar um novo cadastro</a>" </button>
    <br>
    <br>
    <br>


<?php

include("conexao.php");

//Valores informados pelo usuário
$produto = $_POST["nome"];
$categoria = $_POST["categoria"];

// echo $nome. "" .$email;


//Consulta SQL para inserir dados na tabela usuário
$sql = "INSERT INTO produtos (nome, categoria)  VALUES('$produto', '$categoria')";


if(mysqli_query($conexao, $sql)){


    echo "Produto cadastrado com Sucesso: ";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    // echo "<a href='cadastro.html'> Realizar um novo cadastro</a>";

}else{

        echo "Erro"  .mysqli_error($conexao);
    }




?>


</body>
</html>