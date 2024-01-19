a = 2
# b = 3
# c = 12
# d = 4
# e = True
# g = False
#
# ex1 = (a == (c + c) / 2 ) or (b!=d) and (not e)
# ex2 = (b**2 <= (a + b)) or (a >= (c + d))
#
# print(ex1, ex2)

# Uma empresa realizou o financiamento da compra de um centro de usinagem. O pagamento foi realizado da seguinte forma:
# - 1/3 do valor foi pago em dinheiro, à vista, no ato da compra;
# - 50% do que sobrou da dívida será pago em 30 dias sem juros;
# - O restante da dívida será paga em 60 dias com juros de 5% desse valor.
#
# Desenvolva um algoritmo em pseudocódigo/pseudolinguagem para receber o valor a ser pago pelo centro de usinagem e calcular o valor final que custará o produto para a empresa. O algoritmo deve mostrar, ao final, os seguintes dados:
# - o valor do centro de usinagem;
# - o valor pago à vista;
# - o valor pago em 30 dias;
# - o valor pago com juros de 5%;
# - o valor final do produto.

# valor_inicial = float(input("Digite o valor inicial: "))
#
# valor_vista = (1/3) * valor_inicial
#
# valor = valor_inicial - valor_vista
#
# valor_30dias = (valor * (50/100))
#
# valor = valor - valor_30dias
#
# juros = (5/100)
#
# valor_juros = valor + (valor * juros)
#
# valor_final = valor_vista + valor_30dias + valor_juros
#
# print(f"O valor final é: {valor_final}")

# Um aluno de determinada instituição de ensino superior deseja realizar o cálculo do valor da mensalidade do curso de Engenharia para o próximo ano.
# Para a resolução do problema, considere as seguintes informações:
#
# - a instituição aplicará um reajuste ao final do ano, o qual deverá ser informado para o algoritmo;
#
# - cada turno é composto por quatro créditos; assim, a entrada deve ser em créditos e não em turnos que o aluno pretende estudar
# (não são aceitos créditos quebrados, somente inteiros). O valor da mensalidade será calculado pelo valor do crédito que deverá ser informado no
# problema;
#
# - para calcular o valor da parcela, o algoritmo necessita como entrada a quantidade de parcelas que aluno deseja para o semestre. Considerando
# as informações apresentadas, desenvolva um algoritmo no VisuAlg que receba os dados de entrada necessários, calcule o reajuste e exiba, ao final,
# as seguintes informações:
#
# - o valor total antigo do semestre;
#
# - o valor total da mensalidade nova com o reajuste do semestre;
#
# - o valor somente do aumento do semestre (reajuste);
#
# - o total de créditos cursados;
#
# - o número de parcelas;
#
# - o valor de cada parcela (do valor reajustado).

# COMISSÃO
# - Funcionários que vendem de R$ 55.000,00 até R$ 100.000,00 por mês recebem uma comissão de 2% sobre o valor total da venda.
# - Funcionários que vendem menos de R$ 55.000,00 recebem uma comissão fixa de R$ 100,00.
# - Funcionários que vendem mais de R$ 100.000,00 por mês recebem R$ 5.000,00 fixos de comissão.

# Para os funcionários que recebem um valor de comissão, deverá ser impresso o valor do salário final (salário + comissão) e uma mensagem de saída
# no formato A comissão é de xxxx. Aos que não recebem comissão, a frase de comissão não deve aparecer, e sim somente o valor do salário normal

# salario = float(input("Digite seu salário: "))
# vendas = float(input("Digite o valor das suas vendas: "))
#
# if (vendas > 55000) and (vendas < 100000):
#     comissao = (vendas * 2 / 100)
#     salario_final = salario + comissao
#
#     print("Seu salário com a comissão será de {}, e sua comissão é de {}".format(salario_final, comissao))
#
# elif (vendas < 55000):
#     comissao = 100
#     salario_final = salario + comissao
#
#     print(f"Seu salário é de {salario_final}")
#
# else:
#     (vendas > 100000)
#     comissao = 5000
#     salario_final = salario + comissao
#
#     print("Seu salário com a comissão é de {}, e sua comissão é de {}".format(salario_final, comissao))

# CALCULO FRETE

rastreamento = input("Você deseja rastreamento? Preencha com S para sim e N para não")

# Taxa de rastreamento
if (rastreamento == "S"):
    taxa = 200

else:
    taxa = 0

print("regioes "
      "Sul -1 "
      "Sudeste -2 "
      "Centro-oeste- 3")

pecas = int(input("Digite o número de peças: "))
regiao = int(input("Digite a regiao: "))
distancia = int(input("Digite a distancia: "))

litro_diesel = 7
preco_combustivel = distancia * litro_diesel

if (regiao == 1) and (pecas <= 1000):
    frete = pecas + taxa + preco_combustivel
    print(f"O valor do frete é de {frete} reais")

else:
    if (regiao == 1) and (pecas > 100):
        pecas_acima = pecas - 1000
        frete = (pecas_acima - (pecas_acima * 10/100) + taxa + preco_combustivel)
        print(f"O valor do frete é {frete} reais")

    else:
        if (regiao == 2) and (pecas <= 1000):
            frete = pecas * 1.20 + taxa + preco_combustivel
            print(f"O valor do frete será {frete} reais")

        else:
            if (regiao == 2) and (pecas > 1000):
                pecas_acima = (pecas - 1000) * 1.20
                desconto = pecas_acima - pecas_acima * 12/100
                frete = (1000 * 1.20) + desconto + taxa + preco_combustivel
                print(f"O valor do frete será {frete} reais")

            else:
                if (regiao == 3) and (pecas <= 1000):
                    frete = pecas * 1.30 + taxa + preco_combustivel
                    print(f"O valor do frete será {frete} reais")
                else:
                    if (regiao == 3) and (pecas > 1000):
                        pecas_acima = (pecas - 1000) * 1.30
                        desconto = pecas_acima - pecas_acima * 13/100
                        frete = (1000 * 1.30) + desconto + taxa + preco_combustivel
                        print(f"O valor do frete será {frete} reais")








