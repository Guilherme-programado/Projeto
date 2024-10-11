<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Exclusão de produtos do BD</h1>

<?php

include("conexao.php");

if(isset($_POST['codigo'])){

    $codigo = $_POST['codigo'];

    //echo "Código:  .  $codigo Apagado com sucesso";

}

$exclusao = "DELETE FROM produtos WHERE codigo = ($codigo)";


if(mysqli_query($conexao, $exclusao)){

    
    echo "</br>";
    echo "</br>";
    echo "<h3>Produto excluido com sucesso!</h3>";
    echo "</br>";
    echo "Código Excluído: $codigo ";

}else{

    echo "Erro" . mysqli_error($conexao);
}



//}else{

//echo "Digite o código do Usuário";

//echo "<a href='deletar.html'> Voltar para pagina de deletar</a>";

//}


?>

<button class="btn-voltar" type="submit">voltar</button>
</body>
</html>