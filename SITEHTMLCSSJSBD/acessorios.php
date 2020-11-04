<?php
    $servername = "localhost";
    $database = "recodeprojeto_bd";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astro</title>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="css/produtos.css">
   


</head>

<body>
<?php 
    include("menu.html");
    ?>

   
    
    <table id="TabelaMenuProdutos">
        <tr>

            <td><a href="roupas.php">Roupas</a></td>
            <td><a href="calçados.php">Calçados</a></td>
            <td><a href="acessorios.php">Acessorios</a></td>
            <td><a href="esportes.php">Esportes</a></td>

        </tr>

    </table>


    <?php

$sql = "select * FROM produtos WHERE id_produto = 3";
$result=$conn->query($sql);



if($result->num_rows > 0){
        $rows=$result->fetch_assoc();
        echo $rows["id_produto"];
        
}else{
        echo "Nenhum produto cadastrado!";

}
?>

<div class="ProdutosTodos">
<!---->
<div class="ProdutosDeAcessorios">
<!---->
<div class="boxproduto"  id="<?php echo $rows["id_produto"];?>" style="display: block;">

        <img src="<?php echo $rows["imagem_produto"];?>">
        <br>
        <p> <?php echo $rows["desc_produto"];?></p>
        <hr>
        <p> <?php echo $rows["preco_produto"];?></p>


<button onclick="myFunction()">COMPRAR</button>
        

</div>
</div>
</div>


   


<footer>
        
        <p>MatheusBrito</p>
        <p>matheus.rja@recode.com</p>
 </footer>
    <script src="js/jsgeral.js"></script>
</body>

</html>