# Observer

## Introdução
O padrão Observer é utilizado para definir uma dependência um-para-muitos entre objetos, de forma que quando um objeto muda de estado, todos os seus dependentes são notificados e atualizados automaticamente. Este padrão é ideal para sistemas onde múltiplos objetos precisam ser sincronizados com as mudanças em um objeto central.

## Explicação Teórica
O Observer é um padrão comportamental que promove a comunicação entre objetos de maneira desacoplada. Ele permite que um objeto (o sujeito) notifique automaticamente uma lista de objetos dependentes (os observadores) sobre qualquer mudança no seu estado, sem precisar saber quem são ou como eles reagem.

### Benefícios:
- **Desacoplamento:** Reduz a dependência direta entre o sujeito e seus observadores.
- **Flexibilidade:** Facilita a adição de novos observadores sem modificar o código do sujeito.
- **Consistência:** Garante que todos os observadores sejam notificados e atualizados quando o sujeito mudar de estado.

## Exemplo Prático em PHP

Vamos implementar um exemplo usando PHP para demonstrar como o padrão Observer pode ser aplicado em um sistema de alerta meteorológico, onde várias estações de notícias (observadores) são notificadas automaticamente quando há uma mudança no estado do clima (sujeito).

### PHP 7.4
[Código-fonte para PHP 7.4](../../src/behavioral-patterns/php7.4/ObserverExample.php)

### PHP 8.2
[Código-fonte para PHP 8.2](../../src/behavioral-patterns/php8.2/ObserverExample.php)

## Conclusão
O padrão Observer é ideal para cenários onde é necessário manter múltiplos objetos sincronizados com as mudanças de estado de um objeto central. Ele oferece uma maneira flexível e eficiente de garantir que todos os observadores sejam atualizados de forma consistente.

Interessado em aprender mais? Confira nosso próximo tópico sobre **State**!
