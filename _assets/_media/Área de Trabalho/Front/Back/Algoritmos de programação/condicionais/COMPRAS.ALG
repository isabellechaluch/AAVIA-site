algoritmo "compras"

var

  compra, desconto, conta, totaldescontos :real

inicio

conta <- 0

totaldescontos <- 0

repita

        escreval("Digite o valor da compra:")

        leia(compra)

        desconto <- 0

        se compra >= 1000 entao

                 desconto <- compra * 0.1

        fimse

        se (compra >= 500) e (compra < 1000) entao

                 desconto <- compra * 0.05

        fimse

        escreval("Desconto: ",desconto)

        totaldescontos <- totaldescontos + desconto

        se desconto > 0 entao

                 conta <- conta + 1

        fimse

ate compra = 0

escreval("Clientes que receberam desconto: ", conta)

escreval("Total de descontos concedidos: ", totaldescontos)

fimalgoritmo
