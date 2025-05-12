# Cálculo de IMC em PHP

Este repositório contém a implementação de um programa em PHP para classificar o Índice de Massa Corporal (IMC) com base em uma tabela de faixas predefinidas. O exercício faz parte de uma Produção Textual Individual do Senac EAD.

## Enunciado

O objetivo do exercício é criar um arquivo PHP com os seguintes requisitos:

### Arquivo: `calculoimc.php`

1. Criar uma função que receba como parâmetro um valor de IMC (com até duas casas decimais).
2. A função deve classificar o valor recebido de acordo com a tabela de faixas de IMC.
3. As faixas devem ser armazenadas em um array associativo com a seguinte estrutura:

| Faixa de IMC         | Classificação        |
|----------------------|----------------------|
| Até 18.5             | Magreza              |
| De 18.51 a 24.9      | Saudável             |
| De 25.0 a 29.9       | Sobrepeso            |
| De 30.0 a 34.9       | Obesidade Grau I     |
| De 35.0 a 39.9       | Obesidade Grau II    |
| Acima de 39.9        | Obesidade Grau III   |

4. A função deve percorrer o array e identificar a classificação correspondente ao valor informado.
5. Ao encontrar a faixa correta, a função deve exibir a seguinte mensagem:  “Atenção, seu IMC é n, e você está classificado como zzz”. Onde:
- `n` é o valor do IMC informado;
- `zzz` é a classificação correspondente.
