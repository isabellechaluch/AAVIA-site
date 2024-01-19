algoritmo "financiamento"

var

  salario, juros, tempo_empresa, valor_financiar, total_financiamento, parcelas, valor_parcelas, total_juros :real

inicio

      escreval("Digite o valor do financiamento: ")
      leia(valor_financiar)
      
      escreval("Digite o valor do seu salário líquido: ")
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

         escreval("O financiamento concedido será de: ", valor_financiar)
         escreval("Total de juros será de: ", total_juros)
         escreval("O número de parcelas será de: ", parcelas)
         escreval("O valor de cada parcela será de: ", valor_parcelas)
         escreval("O valor total a ser pago pelo financiamento: ", total_financiamento)
      
      fimse
      
      se valor_financiar > 4 *  salario entao
         escreval("Financiamento não concedido!")
         
      fimse
      


fimalgoritmo