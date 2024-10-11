<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> li {
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
        }</style>
</head>
<body>

<h1>Exclusão de Dados do BD</h1>
<header>
        <nav>
            <ul>
                <li><a href="#">Menu</a>
                    <ul>
                        <li><a href="consulta.html">Voltar</a></li>
                        <li><a href="index.html">Login</a></li>
                        <li><a href="alterar.html">Alterar Dados</a></li>
                        <li><a href="consulta.html">Consultar Usuário</a></li>
                        <li><a href="cadastro.html">Cadastrar Usuário</a></li>
                        <li><a href="menu.html">Tela inicial</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

<?php

include("conexao.php");

if(isset($_POST['codigo'])){

    $codigo = $_POST['codigo'];

    //echo "Código:  .  $codigo Apagado com sucesso";

}

$exclusao = "DELETE FROM usuario WHERE codigo = ($codigo)";


if(mysqli_query($conexao, $exclusao)){

    
    echo "</br>";
    echo "</br>";
    echo "<h3>Usuário excluido com sucesso!</h3>";
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


</body>
</html>