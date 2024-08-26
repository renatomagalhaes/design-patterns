# Facade

## Introdução
O padrão Facade é utilizado para fornecer uma interface simplificada para um conjunto complexo de subsistemas. Ele esconde as complexidades dos subsistemas e fornece uma interface única que é mais fácil de usar.

## Explicação Teórica
O Facade é um padrão estrutural que oferece uma interface unificada e simplificada para um conjunto de interfaces em um subsistema. Ele define um ponto de entrada para um sistema complexo, facilitando a interação do cliente com o sistema.

### Benefícios:
- **Simplicidade:** Reduz a complexidade da interação do cliente com subsistemas complexos.
- **Desacoplamento:** Separa o cliente das complexidades do subsistema, facilitando a manutenção e evolução do código.
- **Organização:** Promove um design mais organizado e fácil de entender, especialmente em sistemas grandes.

## Exemplo Prático em PHP

Vamos implementar um exemplo usando PHP para demonstrar como o padrão Facade pode ser aplicado em um sistema de home theater, onde diversos componentes (DVD player, projetor, luzes) são controlados por uma única interface simples.

### PHP 7.4
[Código-fonte para PHP 7.4](../../src/structural-patterns/php7.4/FacadeExample.php)

### PHP 8.2
[Código-fonte para PHP 8.2](../../src/structural-patterns/php8.2/FacadeExample.php)

## Conclusão
O padrão Facade é ideal para situações onde você precisa simplificar a interação com um sistema complexo ou legado. Ele proporciona uma interface clara e direta, facilitando a utilização e o entendimento do sistema pelos clientes.

Interessado em aprender mais? Confira nosso próximo tópico sobre **Flyweight**!
