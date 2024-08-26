# Mediator

## Introdução
O padrão Mediator é utilizado para reduzir as dependências entre objetos em um sistema, controlando como esses objetos interagem entre si. Ele centraliza a comunicação entre diferentes objetos, promovendo um acoplamento fraco e facilitando a manutenção.

## Explicação Teórica
O Mediator é um padrão comportamental que encapsula as interações entre um conjunto de objetos, promovendo um acoplamento fraco ao não permitir que os objetos interajam diretamente entre si. Em vez disso, eles se comunicam por meio de um objeto mediador, que controla e coordena essas interações.

### Benefícios:
- **Desacoplamento:** Reduz as dependências diretas entre objetos, facilitando a manutenção e a evolução do sistema.
- **Centralização:** A lógica de interação é centralizada em um único lugar, promovendo clareza e organização.
- **Flexibilidade:** Facilita a adição e remoção de interações sem impactar os objetos diretamente envolvidos.

## Exemplo Prático em PHP

Vamos implementar um exemplo usando PHP para demonstrar como o padrão Mediator pode ser aplicado em um sistema de diálogo entre diferentes componentes de uma interface gráfica, onde o mediador gerencia as interações entre os componentes.

### PHP 7.4
[Código-fonte para PHP 7.4](../../src/behavioral-patterns/php7.4/MediatorExample.php)

### PHP 8.2
[Código-fonte para PHP 8.2](../../src/behavioral-patterns/php8.2/MediatorExample.php)

## Conclusão
O padrão Mediator é ideal para sistemas onde é necessário gerenciar interações complexas entre múltiplos objetos, reduzindo o acoplamento e promovendo um design mais modular e fácil de manter.

Interessado em aprender mais? Confira nosso próximo tópico sobre **Memento**!
