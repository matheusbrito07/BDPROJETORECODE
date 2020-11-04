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
    

    if(isset($_POST['NOME']) && isset($_POST['IDADE']) && isset($_POST['CPF']) && isset($_POST['ENDEREÇO'])){
            
            $NOME = $_POST['NOME'];
            $IDADE = $_POST['IDADE'];
            $CPF = $_POST['CPF'];
            $ENDEREÇO = $_POST['ENDEREÇO'];

     $sql = "insert into relatorio (NOME,IDADE,CPF,ENDEREÇO) values ('$NOME', '$IDADE','$CPF','$ENDEREÇO')";
     $result = $conn->query($sql);
   }

   ?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astro</title>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="css/contatos.css">

</head>

<body>

<?php 
    include('menu.html');
    ?>



        <h1 id="FaleConoscoTexto">FALE CONOSCO!</h1>

        
        <form method="post" action="">
            
        <table class="TableContato">

            <div class="TableContato2">

            <label for="nome">NOME COMPLETO:</label><br>
            <input type="text" id="NOME" name="NOME"><br><br>

            <label for="idade">IDADE:</label><br>
            <input type="number" id="IDADE" name="IDADE"><br><br>

            <label for="cpf">CPF:</label><br>
            <input type="number" id="CPF" name="CPF"><br><br>

            <label for="endereço">ENDEREÇO:</label><br>
            <textarea id="ENDEREÇO" name="ENDEREÇO" ></textarea><br><br>
            <input type="submit">
        </div>
        </table>
        </form>

<h3 style="text-align:center"><a href="./formulario.php">Formulario</a></h3>
<br><br><br><br>


        <script type="text/javascript" src="js/hora.js"></script>

    <br>
    <br>
    
        <img class="Formadepagamento" src="img/FORMA DE PAGAMENTO.jpg" alt="Formas de Pagamento" title="FormasDePagamento">
   

        

    <footer>
        <p>MatheusBrito</p>
        <p>matheus.rja@recode.com</a></p>
    </footer>



</body>

</html>