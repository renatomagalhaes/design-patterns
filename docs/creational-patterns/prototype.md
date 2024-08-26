# Prototype

## Introdução
O padrão Prototype é utilizado quando a criação de novos objetos é custosa em termos de desempenho ou complexidade. Ele permite criar novos objetos clonando uma instância existente, o que é particularmente útil em cenários onde as operações de criação são complexas ou envolvem muitos recursos.

## Explicação Teórica
O Prototype é um padrão criacional que permite a criação de novos objetos a partir de uma instância existente, conhecida como protótipo. Em vez de instanciar uma nova classe, você clona o protótipo, garantindo que o novo objeto tenha as mesmas propriedades e estado do original, mas podendo ser modificado conforme necessário.

### Benefícios:
- **Eficiência:** Criação de novos objetos sem a necessidade de inicialização completa, economizando recursos.
- **Flexibilidade:** Permite criar diferentes configurações de objetos clonando e modificando um protótipo existente.
- **Simplicidade:** Reduz a necessidade de criar múltiplas subclasses para diferentes configurações de um objeto.

## Exemplo Prático em PHP

Vamos implementar um exemplo usando PHP para demonstrar como o padrão Prototype pode ser aplicado na clonagem de objetos `Document` com diferentes configurações, como títulos e conteúdos, mas partindo de um protótipo básico.

### PHP 7.4
[Código-fonte para PHP 7.4](../../src/creational-patterns/php7.4/PrototypeExample.php)

### PHP 8.2
[Código-fonte para PHP 8.2](../../src/creational-patterns/php8.2/PrototypeExample.php)

## Conclusão
O padrão Prototype é ideal para situações em que a criação de novos objetos é complexa ou envolve muitos recursos. Clonar um protótipo permite economizar tempo e recursos, garantindo que o novo objeto comece com uma configuração conhecida que pode ser ajustada conforme necessário.

Interessado em aprender mais? Confira nosso próximo tópico sobre **Singleton**!
