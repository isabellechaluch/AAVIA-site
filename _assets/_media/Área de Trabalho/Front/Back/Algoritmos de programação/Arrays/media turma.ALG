algoritmo "semnome"
var
  alunos : inteiro
  nota: vetor [1..10] de real
  a: inteiro
  soma: real
  media: real

inicio
  escreval("Digite o número de alunos:")
  leia(alunos)

  para a de 1 ate alunos faca
     escreval("Digite a nota do aluno")
     leia(nota[a])
  fimpara

  soma <- 0
  para a de 1 ate alunos faca
       soma <- soma + nota[a]
  fimpara

  media <- soma / alunos
  escreval("A média da turma é", media)
fimalgoritmo
