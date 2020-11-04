<?php include("conexao.php")?>

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


    

<div id="Produtos_Promo">
    <img src="img/produtos/chinelos.png" alt="Chinelos" title="P_Chinelos">
    <img src="img/produtos/esportes.jpg" alt="Roupas Esportivas" title="RoupasEsportivas;">
    <img src="img/produtos/tenis.jpg" alt="Tenis" title="P_Tenis;" >

</div>




<div id="Produtos_Conhecer">
    <h1>CONHEÇA TODOS OS NOSSOS PRODUTOS</h1>
    <img class="Produtos_ConhecerImg"src="img/produtos/anuncios de itens.png" alt="Anuncio de itens" title="AnuncioDeItens;">       
</div>


<div id="PromocaoImperdivel">

    <img src="img/produtos/chinelosmais.jpg" alt="Chinelos" title="P_Chinelos2">
    <img src="img/produtos/mochilas.jpg" alt="Mochilas" title="P_Produtos">
    <img src="img/produtos/roupasparaodiadia.jpg" alt="Roupas para o dia a dia" title="P_RoupasParaODiaADia">

</div>


<div id="TABELAO">

    <h1 class="TabelaoTexto">PRODUTOS QUE BAIXARAM DE PREÇO</h1>
    

    <table class="TabelaDeProdutos">
        <tr>

            <td><img src="img/produtos/relogios/relogio.jpg" alt="Relogio Vermelho" title="P_Relogio"></td>
            <td><img src="img/produtos/relogios/relogio1.jpg" alt="Relogio Preto" title="P_Relogio1"></td>
            <td><img src="img/produtos/relogios/relogio2.jpg" alt="Relogio Rose" title="P_Relogio2"></td>
            <td><img src="img/produtos/relogios/relogio3.jpg" alt="Relogio Gold" title="P_Relogio3"></td>
            <td><img src="img/produtos/relogios/relogio4.jpg" alt="Relogio Silver" title="P_Relogio4"></td>

        </tr>

        <tr class="TabelaNomeProduto">
            <td>Relógio Vermelho</td>
            <td>Relógio Preto </td>
            <td>Relógio Rose</td>
            <td>Relógio Gold</td>
            <td>Relógio Silver</td>
        </tr>

        <tr class="ValorAntigo">
            <td><strike>599,00R$</strike></td>
            <td><strike>699,00R$</strike></td>
            <td><strike>999,00R$</strike></td>
            <td><strike>399,00R$</strike></td>
            <td><strike>99,00R$</strike></td>

        </tr>

        <tr class="NovoValor">
            <td>399,00R$</td>
            <td>599,00R$</td>
            <td>599,00R$</td>
            <td>299,00R$</td>
            <td>49,00R$</td>
        </tr>

        <tr>
            <td> <input type="submit" value="COMPRAR"></td>
            <td> <input type="submit" value="COMPRAR"></td>
            <td> <input type="submit" value="COMPRAR"></td>
            <td> <input type="submit" value="COMPRAR"></td>
            <td> <input type="submit" value="COMPRAR"></td>
        </tr>
    </table>

</div>


    <img class="PromocaoOutlet" src="img/promoçãooutletr.jpg" alt="Promoção Outlet" title="P_PromoçaoOutLet">

     <footer>
            <p>MatheusBrito</p>
            <p>matheus.rja@recode.com</a></p>
        </footer>
</body>

</html>