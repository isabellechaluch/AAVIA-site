Algoritmo "funcao dobro"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 17/8/2023
Var
   numero, resultado: inteiro

funcao dobro (n : inteiro) : inteiro
Inicio
      retorne = n * 2
fimfuncao

inicio
escreval("Digite um numero: ")
leia (numero)

resultado <- dobro(numero)

escreval("O dobro � ", resultado)

Fimalgoritmo