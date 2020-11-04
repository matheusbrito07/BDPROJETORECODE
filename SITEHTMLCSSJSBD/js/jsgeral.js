
    function myFunction() {

            var resultado=quantidade*valor



    alert(`Total a pagar: R$${resultado},00`);
    }




    var quantidade=0
    var pai=document.querySelectorAll(".boxproduto")
    console.log(pai);



        pai[0].innerHTML+= `<div>
        <a href="#" onclick="alterar('decrementar')">-</a>
        <input name="resultado" id="resultado" value="${quantidade}" disabled>
        <a href="#" onclick="alterar('incrementar')">+</a>
        </div>`




            function alterar(operacao){
                
                if(operacao=='incrementar'){
                    
                    var esteproduto=document.querySelector(`#resultado`)
                    quantidade++
                    esteproduto.value=quantidade
                    console.log(quantidade)
            }

            else{
                var esteproduto=document.querySelector(`#resultado`)
                quantidade--
                esteproduto.value=quantidade
                console.log(quantidade)

            }
            }






var valor=1000
var preco=document.querySelector('.preco')
console.log(preco)
preco.innerHTML=`R$${valor},00`



            