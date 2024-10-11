<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca por Produto</title>
</head>
<body>
   
<?php

include("Conexao.php");

if(isset($_POST["nome"])){

$produto = $_POST["nome"]; //nome do usuário
$categoria = $_POST["categoria"];


// echo $usuario. "é"  .$email; Teste de Saída



$login = "SELECT * FROM produtos WHERE nome = '{$produto}' and categoria ='{$categoria}'";  //Seleciona nome e email da tabela usuario e certificar 

$acesso = mysqli_query($conexao, $login);

if(!$acesso){

    echo "Falha de Login";

}

$informacao = mysqli_fetch_assoc($acesso);

}

if(empty($informacao)){

    echo "Login sem conexão";

}else{

    echo "Login realizado com sucesso";

    header("location:cadastro.html");
}


?>

<form action="index.html" method="POST">

          
            <button class="btn-login" type="submit">voltar</button>
          </form>

</body>
</html>