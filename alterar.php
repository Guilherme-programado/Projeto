<?php

include("conexao.php");

// Segundo processo de Alteração

if(isset($_POST['nome'])){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $codigo = $_POST['codigo'];

// Variável de Alteração, vai receber o comando de UPdate

$alterar = "UPDATE usuario SET nome = '{$nome}', email = '{$email}' WHERE codigo = '{$codigo}'"; 

$operacao_alterar =  mysqli_query($conexao, $alterar);

    if(!$operacao_alterar){

        echo "Error:" . mysqli_error($conexao);

    }else{

        // header('location: alterarcao.html');
        echo "Alteração realizada com SUCESSO";
    }

}


//Primeiro porcesso do Código, preencher o formulario

$usuario =  " SELECT * FROM usuario ";

if(isset($_POST['codigo'])){  //vai checar se tem algum valor dentro da variável


    $codigo = $_POST['codigo'];

    $usuario .=  "WHERE codigo = {$codigo}"; //essa variável ($usuario) vai receber a condição que quero


}else{

            //certifica o primeiro elemento

    $usuario .= "WHERE codigo = 1"; //se ele não identificou que o código esta certo, a condição seria ele buscar pela posição 1


}
                //consulta
$con_usuario = mysqli_query($conexao, $usuario);

    //teste de conexão, vrifica se é falso ou verdadeiro

if(!$con_usuario){    // o "!" verifica se é falso ou verdadeiro

                    //erro
    echo "Erro"  . mysqli_error($conexao);

}else{

    //criando um array, vai armazenar todos os códigos

                    //array
    $info_usuario = mysqli_fetch_assoc($con_usuario);  // esta indo na tabela usuario e criando um array com os códigos

}



?>

        <!-- Formulario recebe dados do Banco de dados -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alteração de dados usuário</title>
    <style>
         li {
            display: inline-block;
            margin-right: 20px;
            position: relative;
        }

        li a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            background-color: #333;
            display: block;
        }

        nav ul {
            padding: 0;
            margin: 0;
            display: flex;
        }

 
        nav ul li ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: rgba(0, 0, 0, 0.8);
            list-style: none;
            padding: 0;
            margin: 0;
            width: 200px;
            z-index: 999;
        }

        nav ul li ul li {
            display: block;
        }

        nav ul li:hover ul {
            display: block;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        body {
            background-color: rgb(201, 201, 201);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            margin: 20px auto;
            text-align: center;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #0a2df0;
            color: white;
        }

        td img {
            max-width: 120px;
            height: auto;
        }

        header {
            background-color: rgba(6, 60, 236, 0.8);
            padding: 20px;
            text-align: center;
            color: white;
        }

     
        nav {
            display: inline-block;
            margin: 0 auto;
        }
    </style>

</head>
<body>
    
<h1>Atualizar Dados do Usuário</h1>

        <form action="" method="post">

        <label for="nome"> Nome do Usuário</label>
        <input type="text" value= "<?php echo $info_usuario['nome']?>" name="nome"><br>
        <label for="email"> E-mail do usuário </label>
        <input type="email" value="<?php echo $info_usuario['email']?>" name="email"><br>
        <input type="hidden" value="<?php echo $info_usuario['codigo']?>" name="codigo"><br>

        <input type="submit" name="submit" value="Alterar">

        </form>
        <header>
        <nav>
            <ul>
                <li><a href="#">Menu</a>
                    <ul>
                        <li><a href="consulta.html">consultar usuario</a></li>
                        <li><a href="index.html">Login</a></li>
                        <li><a href="alterar.html">voltar</a></li>
                        <li><a href="deletar.html">Deletar Usuário</a></li>
                        <li><a href="cadastro.html">Cadastrar Usuário</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

</body>
</html>