# Decorator

## Introdução
O padrão Decorator é utilizado para adicionar funcionalidades a objetos dinamicamente. Ele oferece uma alternativa flexível para a herança, permitindo que novas funcionalidades sejam compostas de forma modular.

## Explicação Teórica
O Decorator é um padrão estrutural que permite que você adicione responsabilidades a um objeto, encapsulando-o dentro de uma classe decoradora. Essa classe "decora" o objeto original com novas funcionalidades, sem modificar o código original da classe.

### Benefícios:
- **Flexibilidade:** Permite a composição de comportamentos de maneira dinâmica e modular.
- **Reusabilidade:** Evita a criação de subclasses desnecessárias, promovendo a reutilização de código.
- **Transparência:** O uso de decoradores é transparente para o cliente, que não precisa saber se está utilizando o objeto original ou decorado.

## Exemplo Prático em PHP

Vamos implementar um exemplo usando PHP para demonstrar como o padrão Decorator pode ser aplicado em um sistema de mensagens, onde diferentes tipos de notificações (simples, encriptadas, com log) podem ser compostas dinamicamente.

### PHP 7.4
[Código-fonte para PHP 7.4](../../src/structural-patterns/php7.4/DecoratorExample.php)

### PHP 8.2
[Código-fonte para PHP 8.2](../../src/structural-patterns/php8.2/DecoratorExample.php)

## Conclusão
O padrão Decorator é ideal para situações onde é necessário adicionar funcionalidades a objetos de maneira dinâmica e modular, sem precisar modificar a classe original. Ele permite uma grande flexibilidade e facilita a composição de comportamentos complexos.

Interessado em aprender mais? Confira nosso próximo tópico sobre **Facade**!
