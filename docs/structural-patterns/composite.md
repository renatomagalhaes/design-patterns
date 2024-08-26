# Composite

## Introdução
O padrão Composite é utilizado para compor objetos em estruturas de árvore para representar hierarquias parte-todo. Ele permite que os clientes tratem objetos individuais e composições de objetos de maneira uniforme.

## Explicação Teórica
O Composite é um padrão estrutural que organiza objetos em uma estrutura de árvore para representar hierarquias parte-todo. Ele permite que você trate objetos individuais e composições de objetos de maneira uniforme, o que é útil em casos onde um cliente precisa interagir de maneira consistente com uma coleção de objetos.

### Benefícios:
- **Uniformidade:** Tratamento uniforme de objetos simples e compostos.
- **Facilidade de Adição:** Facilita a adição de novos componentes à estrutura sem modificar o código existente.
- **Flexibilidade:** Funciona bem em situações onde a estrutura hierárquica de objetos é necessária.

## Exemplo Prático em PHP

Vamos implementar um exemplo usando PHP para demonstrar como o padrão Composite pode ser aplicado para criar uma estrutura de arquivos e pastas, onde tanto arquivos quanto pastas podem ser manipulados da mesma forma.

### PHP 7.4
[Código-fonte para PHP 7.4](../../src/structural-patterns/php7.4/CompositeExample.php)

### PHP 8.2
[Código-fonte para PHP 8.2](../../src/structural-patterns/php8.2/CompositeExample.php)

## Conclusão
O padrão Composite é ideal para representar hierarquias de objetos, como estruturas de árvore. Ele simplifica a interação com objetos compostos e permite que você trate objetos individuais e grupos de objetos de maneira uniforme.

Interessado em aprender mais? Confira nosso próximo tópico sobre **Decorator**!
