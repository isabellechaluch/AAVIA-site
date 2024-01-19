Algoritmo "semnome"

Var
   Primeirotermo, razao, soma, contador, num, fim: inteiro

Inicio

      num <- Primeirotermo

   Escreval ("Informe o primeiro termo: ")
   Leia (Primeirotermo)
   Escreval ("Informe a razão: " )
   Leia (razao)
   Escreval ("Informe a quantidade de termos: ")
   Leia (fim)
   

   para controle de 1 até fim faça
      num <- razao + num
   Fim Para

   Escreva "O somatório dos números no intervalo [", numUm, ", ", numDois, "] é: ", soma
Fim Algoritmo
