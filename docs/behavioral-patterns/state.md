# State

## Introdução
O padrão State é utilizado para permitir que um objeto altere seu comportamento quando seu estado interno muda. O objeto parecerá mudar sua classe, permitindo que diferentes comportamentos sejam aplicados conforme o estado do objeto evolui.

## Explicação Teórica
O State é um padrão comportamental que permite que um objeto altere seu comportamento quando seu estado muda. Este padrão é particularmente útil quando o comportamento de um objeto deve variar em resposta a mudanças de estado, evitando a proliferação de instruções `if` ou `switch` complexas.

### Benefícios:
- **Organização:** Promove a organização do código, separando o comportamento em diferentes estados.
- **Manutenção:** Facilita a manutenção e a extensão, já que novos estados podem ser adicionados sem modificar os estados existentes.
- **Encapsulamento:** Mantém os estados encapsulados, promovendo a coesão dentro de cada estado.

## Exemplo Prático em PHP

Vamos implementar um exemplo usando PHP para demonstrar como o padrão State pode ser aplicado em um sistema de controle de pedidos, onde o comportamento do pedido muda conforme seu estado evolui (novo, processando, enviado, entregue).

### PHP 7.4
[Código-fonte para PHP 7.4](../../src/behavioral-patterns/php7.4/StateExample.php)

### PHP 8.2
[Código-fonte para PHP 8.2](../../src/behavioral-patterns/php8.2/StateExample.php)

## Conclusão
O padrão State é ideal para cenários onde o comportamento de um objeto deve variar conforme seu estado interno. Ele permite a criação de sistemas flexíveis e fáceis de manter, onde novos estados e comportamentos podem ser adicionados sem impactar o restante do código.

Interessado em aprender mais? Confira nosso próximo tópico sobre **Strategy**!
