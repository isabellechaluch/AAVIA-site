Algoritmo "semnome"

Var
   Primeirotermo, razao, soma, contador, num, fim: inteiro

Inicio

      num <- Primeirotermo

   Escreval ("Informe o primeiro termo: ")
   Leia (Primeirotermo)
   Escreval ("Informe a raz�o: " )
   Leia (razao)
   Escreval ("Informe a quantidade de termos: ")
   Leia (fim)
   

   para controle de 1 at� fim fa�a
      num <- razao + num
   Fim Para

   Escreva "O somat�rio dos n�meros no intervalo [", numUm, ", ", numDois, "] �: ", soma
Fim Algoritmo
