# Visitor

## Introdução
O padrão Visitor é utilizado para separar algoritmos das estruturas de dados nos quais eles operam. Ele permite que novas operações sejam adicionadas a um objeto sem modificar o código do objeto, promovendo a extensão do comportamento sem a necessidade de alterar a estrutura original.

## Explicação Teórica
O Visitor é um padrão comportamental que permite que você adicione novas operações a objetos de uma hierarquia de classes sem alterar as classes sobre as quais opera. Ele separa o algoritmo da estrutura de dados, promovendo a extensão e a manutenção do código.

### Benefícios:
- **Extensibilidade:** Facilita a adição de novas operações sem modificar as classes originais.
- **Desacoplamento:** Separa os algoritmos das estruturas de dados, mantendo o código mais organizado.
- **Manutenção:** Promove uma manutenção mais fácil, já que novas funcionalidades podem ser adicionadas sem alterar o código existente.

## Exemplo Prático em PHP

Vamos implementar um exemplo usando PHP para demonstrar como o padrão Visitor pode ser aplicado em um sistema de relatório financeiro, onde diferentes tipos de relatórios (PDF, CSV) podem ser gerados para diferentes elementos financeiros (faturas, recibos).

### PHP 7.4
[Código-fonte para PHP 7.4](../../src/behavioral-patterns/php7.4/VisitorExample.php)

### PHP 8.2
[Código-fonte para PHP 8.2](../../src/behavioral-patterns/php8.2/VisitorExample.php)

## Conclusão
O padrão Visitor é ideal para cenários onde é necessário aplicar operações a objetos de uma hierarquia de classes sem alterar essas classes. Ele promove a extensibilidade e o desacoplamento, facilitando a adição de novas operações sem impactar a estrutura existente.

Com isso, concluímos a abordagem dos padrões comportamentais. Parabéns por ter chegado até aqui!
