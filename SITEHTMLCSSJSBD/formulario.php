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
    <link rel="stylesheet" href="css/home.css">

 
</head>

<body>
    
<?php 
    include("menu.html");
    ?>
<?php 

$sql = "select *from relatorio";
$result=$conn->query($sql);


if($result->num_rows > 0){
       while ($rows = $result->fetch_assoc()){ 
        echo "NOME" , $rows ['NOME'], "<br>", "<br>";
        echo "IDADE" , $rows ['IDADE'], "<br>", "<br>";
        echo "CPF" , $rows ['CPF'], "<br>", "<br>";
        echo "ENDEREÇO" , $rows ['ENDEREÇO'], "<br>", "<br>";
    
}

}else{
        echo "Nenhuma pessoa foi registrada!", "<br>";

}
?>
<h3><a href="./contatos.php"> FALE CONOSCO</a></h3>
    
</body>
    