<?php

include("Conexao.php");

if(isset($_POST["nome"])){

$usuario = $_POST["nome"]; //nome do usuário
$email = $_POST["email"];


// echo $usuario. "é"  .$email; Teste de Saída



$login = "SELECT * FROM usuario WHERE nome = '{$usuario}' and email ='{$email}'";  //Seleciona nome e email da tabela usuario e certificar 

$acesso = mysqli_query($conexao, $login);
$nome = $_POST['nome'];
$email = $_POST['email'];
$informacao1 = $nome && $email;
if(!$acesso){

    echo "Falha de Login";

}

$informacao = mysqli_fetch_assoc($acesso);

}

if(empty($informacao)){

    echo "<br>";
    echo "<span style='color:red;'>Faltam informações, preencha os campos e tente novamente</span>";

}
elseif(empty($informacao1)){
echo "preencha os campos de nome e email para continuar";

}else{

    echo "Login realizado com sucesso";

    header("location:menu.html");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<form action="index.html" method="POST">

          
        
          </form>
          <header>
        <nav>
            <ul>
                <li><a href="#">Menu</a>
                    <ul>
                        <li><a href="index.html">Voltar para o login</a></li>
                      
                    </ul>
                </li>
            </ul>
        </nav>
</body>
</html>