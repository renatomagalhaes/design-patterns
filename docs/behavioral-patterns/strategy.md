# Strategy

## Introdução
O padrão Strategy é utilizado para definir uma família de algoritmos, encapsulá-los em classes separadas e torná-los intercambiáveis. Esse padrão permite que os algoritmos variem independentemente do cliente que os utiliza.

## Explicação Teórica
O Strategy é um padrão comportamental que permite selecionar um algoritmo de um grupo de algoritmos relacionados e colocá-lo em execução. Cada algoritmo é encapsulado em uma classe específica, permitindo que o comportamento do cliente mude dinamicamente de acordo com o algoritmo escolhido.

### Benefícios:
- **Flexibilidade:** Facilita a troca de algoritmos em tempo de execução.
- **Reusabilidade:** Promove a reutilização de código ao encapsular algoritmos em classes específicas.
- **Manutenção:** Facilita a manutenção e extensão ao isolar os algoritmos em suas próprias classes.

## Exemplo Prático em PHP

Vamos implementar um exemplo usando PHP para demonstrar como o padrão Strategy pode ser aplicado em um sistema de cálculo de preços, onde diferentes estratégias de cálculo (preço padrão, desconto) podem ser aplicadas dinamicamente.

### PHP 7.4
[Código-fonte para PHP 7.4](../../src/behavioral-patterns/php7.4/StrategyExample.php)

### PHP 8.2
[Código-fonte para PHP 8.2](../../src/behavioral-patterns/php8.2/StrategyExample.php)

## Conclusão
O padrão Strategy é ideal para cenários onde você precisa alterar o comportamento de um objeto durante a execução. Ele oferece uma maneira flexível de organizar e reutilizar algoritmos, permitindo que o comportamento seja modificado sem alterar o código do cliente.

Interessado em aprender mais? Confira nosso próximo tópico sobre **Template Method**!
