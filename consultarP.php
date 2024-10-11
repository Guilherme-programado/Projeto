<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<body>
  
<h1>Relação de Cadastro de Nomes</h1>


<?php

include("Conexao.php");

$nome = $_POST['nome'];

//echo $nome;

// Consulta no Mysql com a relação de nomes

$result_usuario  = "SELECT * FROM produtos WHERE nome LIKE '%$nome%'";

$resultado_usuario = mysqli_query($conexao, $result_usuario);

// Checar a conexão


if(mysqli_query($conexao, $result_usuario)){

 

   while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)){//fazer a leitura das informações dentro da array

    echo "<br>";
    echo "<br>";
    //echo "Codigo: " .  $row_usuario['codigo']  . "</br>";
    //echo "Nome: " .  $row_usuario['nome'] . "</br>";
    //echo "E-mail: " . $row_usuario['email'] . "</br>";


    //Forma de Tabela

    //echo "<table border = '1'>";  //criando a primeira coluna

    //echo "<td>$row_usuario[codigo]</td>";
    //echo "<td>$row_usuario[nome]</td>";
    // echo "<td>$row_usuario[email]</td>";
    
    // echo "</table>";



   //Forma de lista 

    echo "<ul>";


        echo "<li> Produto: $row_usuario[nome]"; 
        echo "<li> Categoria: $row_usuario[categoria]";
        echo "<li> Código:$row_usuario[codigo]";



    echo "</ul>";

   }


}else{


    echo "Erro" . mysqli_error($conexao);



}



?>

</body>
</html>