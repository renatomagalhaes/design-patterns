# Bridge

## Introdução
O padrão Bridge é utilizado para desacoplar uma abstração da sua implementação, permitindo que ambas possam variar independentemente. Este padrão é especialmente útil quando as abstrações e suas implementações devem evoluir separadamente.

## Explicação Teórica
O Bridge é um padrão estrutural que separa a abstração de uma classe da sua implementação para que as duas possam ser desenvolvidas e modificadas de forma independente. Ele é útil em sistemas complexos onde é importante manter a flexibilidade e a escalabilidade do código.

### Benefícios:
- **Desacoplamento:** A separação da abstração e da implementação permite que cada parte evolua independentemente.
- **Extensibilidade:** Facilita a adição de novas abstrações e implementações sem a necessidade de alterar o código existente.
- **Flexibilidade:** Permite que diferentes implementações sejam intercaladas e utilizadas conforme necessário.

## Exemplo Prático em PHP

Vamos implementar um exemplo usando PHP para demonstrar como o padrão Bridge pode ser aplicado em um sistema de notificações que pode enviar mensagens via diferentes canais (e-mail, SMS), com diferentes tipos de notificações (alerta, log).

### PHP 7.4
[Código-fonte para PHP 7.4](../../src/structural-patterns/php7.4/BridgeExample.php)

### PHP 8.2
[Código-fonte para PHP 8.2](../../src/structural-patterns/php8.2/BridgeExample.php)

## Conclusão
O padrão Bridge é ideal para situações em que a abstração e a implementação de uma classe precisam ser desacopladas para evoluírem de forma independente. Ele é amplamente utilizado em sistemas que precisam ser altamente configuráveis e escaláveis.

Interessado em aprender mais? Confira nosso próximo tópico sobre **Composite**!
