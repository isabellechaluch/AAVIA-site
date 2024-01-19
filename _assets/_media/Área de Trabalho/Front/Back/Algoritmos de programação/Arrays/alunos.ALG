algoritmo "semnome"
var
vetnome: vetor [1..5] de caracter
vetidade: vetor [1..5] de inteiro
vetmatricula: vetor [1..5] de inteiro
a: inteiro

inicio
  para a de 1 ate 5 faca
     escreval("Digite o nome do aluno")
     leia(vetnome[a])
     
     escreval("Digite a matricula do aluno")
     leia (vetmatricula[a])
     
     escreval("Digite a idade do aluno")
     leia (vetidade[a])
     
  fimpara
  
  para a de 1 ate 5 faca
       escreval("Aluno",vetnome[a])
       escreval("Idade",vetidade[a])
       escreval("Matricula",vetmatricula[a])
  fimpara
fimalgoritmo