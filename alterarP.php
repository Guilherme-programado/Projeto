<?php

include("conexao.php");

// Segundo processo de Alteração

if(isset($_POST['nome'])){

    $produto = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $codigo = $_POST['codigo'];

// Variável de Alteração, vai receber o comando de UPdate

$alterar = "UPDATE produtos SET nome = '{$produto}', categoria = '{$categoria}' WHERE codigo = '{$codigo}'"; 

$operacao_alterar =  mysqli_query($conexao, $alterar);

    if(!$operacao_alterar){

        echo "Error:" . mysqli_error($conexao);

    }else{

        // header('location: alterarcao.html');
        echo "Alteração realizada com SUCESSO";
    }

}


//Primeiro processo do Código, preencher o formulario

$produtos =  " SELECT * FROM produtos ";

if(isset($_POST['codigo'])){  //vai checar se tem algum valor dentro da variável


    $codigo = $_POST['codigo'];

    $produtos .=  "WHERE codigo = {$codigo}"; //essa variável ($usuario) vai receber a condição que quero


}else{

            //certifica o primeiro elemento

    $produtos .= "WHERE codigo = 1"; //se ele não identificou que o código esta certo, a condição seria ele buscar pela posição 1


}
                //consulta
$con_produto = mysqli_query($conexao, $produtos);

    //teste de conexão, vrifica se é falso ou verdadeiro

if(!$con_produto){    // o "!" verifica se é falso ou verdadeiro

                    //erro
    echo "Erro"  . mysqli_error($conexao);

}else{

    //criando um array, vai armazenar todos os códigos

                    //array
    $info_produto = mysqli_fetch_assoc($con_produto);  // esta indo na tabela usuario e criando um array com os códigos

}



?>

        <!-- Formulario recebe dados do Banco de dados -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alteração de dados produto</title>

</head>
<body>
    
<h1>Atualizar Dados do produto</h1>

        <form action="" method="post">

        <label for="nome"> Nome do Produto: </label>
        <input type="text" value= "<?php echo $info_produto['nome']?>" name="nome"><br>
        <label for="categoria"> Categoria: </label>
        <input type="categoria" value="<?php echo $info_produto['categoria']?>" name="categoria"><br>
        <input type="hidden" value="<?php echo $info_produto['codigo']?>" name="codigo"><br>

        <input type="submit" name="submit" value="Alterar">

        </form>


</body>
</html>