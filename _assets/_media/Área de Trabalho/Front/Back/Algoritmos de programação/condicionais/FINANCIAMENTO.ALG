algoritmo "financiamento"

var

  salario, juros, tempo_empresa, valor_financiar, total_financiamento, parcelas, valor_parcelas, total_juros :real

inicio

      escreval("Digite o valor do financiamento: ")
      leia(valor_financiar)
      
      escreval("Digite o valor do seu sal�rio l�quido: ")
      leia(salario)
      
      escreval("Digite o tempo de empresa: ")
      leia(tempo_empresa)
      

      se valor_financiar < 4 * salario entao
      
          juros <- 2/100
          parcelas <- 3
         
         se tempo_empresa > 3 entao

            juros <- juros- 0.5/100
            
         fimse
         
         se valor_financiar > 5000 entao
            parcelas <- 6
         fimse
         
         valor_parcelas <- valor_financiar / parcelas
         total_juros <- (valor_parcelas * juros) * parcelas
         total_financiamento <- valor_financiar + total_juros

         escreval("O financiamento concedido ser� de: ", valor_financiar)
         escreval("Total de juros ser� de: ", total_juros)
         escreval("O n�mero de parcelas ser� de: ", parcelas)
         escreval("O valor de cada parcela ser� de: ", valor_parcelas)
         escreval("O valor total a ser pago pelo financiamento: ", total_financiamento)
      
      fimse
      
      se valor_financiar > 4 *  salario entao
         escreval("Financiamento n�o concedido!")
         
      fimse
      


fimalgoritmo