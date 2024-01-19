Algoritmo "Matrizes"

Var

matriz:vetor[0..2,0..2]de inteiro
i, j, primeiro, menor, linha, coluna, menorlinha:inteiro

Inicio

primeiro <- matriz[0,0]
// Inicializando matrizes com todos eleementos zerados

para i de 0 até 2 faca
     para j de 0 ate 2 faca
          matriz[i,j]<-0
     fimpara
fimpara

// Preenchendo os valores por digitação

para i de 0 ate 2 faca
     para j de 0 ate 2 faca
          escreval("Digite um valor para a matriz")
          leia(matriz[i,j])
     fimpara
fimpara

// Escrever os valores da matriz

para i de 0 ate 2 faca
     para j de 0 ate 2 faca
          escreval(matriz[i,j])
     fimpara
fimpara

// Encontrar as coordenadas do menor elemento da matriz

menor <- matriz[0,0]

para i de 0 ate 2 faca
     para j de 0 ate 2 faca
          se(matriz[i,j] < menor) entao
          
          menor <-  matriz[i,j]
          linha <- i
          coluna<- j
          
          fimse
     fimpara
fimpara

// Encontrar o maior elemento da linha onde se encontra o menor elemento da matriz

menorlinha <- matriz[linha,0]

para coluna de 0 ate 2 faca
     se (matriz[linha,coluna] > menorlinha) entao
        menorlinha <- matriz[linha,coluna]
     fimse
fimpara

escreval("O menor valor é ", menor)
escreval ("O maior valor do elemento da linha do menor é: ", menorlinha)

Fimalgoritmo