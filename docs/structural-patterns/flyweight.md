# Flyweight

## Introdução
O padrão Flyweight é utilizado para minimizar o uso de memória ao compartilhar o máximo de dados possível entre objetos semelhantes. Este padrão é ideal para situações em que um grande número de objetos precisa ser criado, mas muitos deles compartilham dados comuns.

## Explicação Teórica
O Flyweight é um padrão estrutural que reduz a quantidade de objetos criados e a memória utilizada por eles, compartilhando partes de seu estado entre vários objetos. Ele distingue entre estados intrínsecos, que são compartilháveis, e estados extrínsecos, que variam de acordo com o contexto e não são compartilhados.

### Benefícios:
- **Eficiência de Memória:** Reduz a quantidade de memória utilizada ao compartilhar dados comuns entre objetos.
- **Escalabilidade:** Permite que o sistema lide com um grande número de objetos sem comprometer o desempenho.
- **Flexibilidade:** Mantém a funcionalidade completa dos objetos, mas com um uso mais eficiente dos recursos.

## Exemplo Prático em PHP

Vamos implementar um exemplo usando PHP para demonstrar como o padrão Flyweight pode ser aplicado em um sistema de representação gráfica de árvores, onde muitas árvores compartilham características semelhantes.

### PHP 7.4
[Código-fonte para PHP 7.4](../../src/structural-patterns/php7.4/FlyweightExample.php)

### PHP 8.2
[Código-fonte para PHP 8.2](../../src/structural-patterns/php8.2/FlyweightExample.php)

## Conclusão
O padrão Flyweight é ideal para sistemas que precisam criar um grande número de objetos semelhantes, onde o uso de memória pode se tornar um problema. Ele oferece uma solução eficiente e escalável ao compartilhar partes comuns do estado entre múltiplos objetos.

Interessado em aprender mais? Confira nosso próximo tópico sobre **Proxy**!
