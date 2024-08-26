# Iterator

## Introdução
O padrão Iterator é utilizado para fornecer uma maneira de acessar sequencialmente os elementos de uma coleção, sem expor sua representação subjacente. Ele permite percorrer uma coleção de objetos de forma uniforme, independentemente da sua estrutura interna.

## Explicação Teórica
O Iterator é um padrão comportamental que abstrai o processo de iteração sobre uma coleção de objetos. Ele oferece uma interface para acessar os elementos de uma coleção sem precisar conhecer sua estrutura interna, promovendo um código mais flexível e desacoplado.

### Benefícios:
- **Simplicidade:** Facilita a iteração sobre coleções complexas sem precisar expor detalhes internos.
- **Consistência:** Proporciona uma maneira uniforme de percorrer diferentes tipos de coleções.
- **Flexibilidade:** Permite modificar a coleção subjacente sem alterar o código que a percorre.

## Exemplo Prático em PHP

Vamos implementar um exemplo usando PHP para demonstrar como o padrão Iterator pode ser aplicado para percorrer uma coleção de livros, onde cada livro possui um título e um autor.

### PHP 7.4
[Código-fonte para PHP 7.4](../../src/behavioral-patterns/php7.4/IteratorExample.php)

### PHP 8.2
[Código-fonte para PHP 8.2](../../src/behavioral-patterns/php8.2/IteratorExample.php)

## Conclusão
O padrão Iterator é ideal para situações onde você precisa acessar os elementos de uma coleção de maneira sequencial, sem precisar conhecer sua estrutura interna. Ele proporciona uma interface clara e flexível para percorrer coleções, facilitando a manutenção e a extensão do código.

Interessado em aprender mais? Confira nosso próximo tópico sobre **Mediator**!
