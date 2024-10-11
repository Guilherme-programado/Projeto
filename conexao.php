<?php

$host = "localhost"; //Endereço do servidor
$usuario = "root"; //Nome do usuário do Bnaco de dados 
$senha = "Senac@2024"; //Senha do Banco de dados
$dbname = "supermercado_mig_market"; //Nome do Banco de dados 


// Utiliza a conexão do banco de dados com Mysql
//$conexao = mysqli_connect($host, $usuario, $senha, $dbname); //Também posso fazer dessa forma, uma outra conexão


$conexao = new mysqli($host, $usuario, $senha, $dbname); //Também posso fazer dessa forma, uma outra conexão

// -> referencia a um objeto

if($conexao->connect_error){


    echo "Erro" .mysqli_error($conexao); //Se ocorrer erro na conexão

}else{


    //echo "Conexão realizada com sucesso";  //vai verificar em todas as páginas

    //header('Location: index.html'); //Caso a conexão seja bem-sucessida vai ir para a página indexx.html
}


?>