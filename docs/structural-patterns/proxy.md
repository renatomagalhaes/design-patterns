# Proxy

## Introdução
O padrão Proxy é utilizado para fornecer um substituto ou marcador para outro objeto. Um proxy controla o acesso a esse objeto, permitindo que você adicione funcionalidades adicionais, como controle de acesso ou cache, sem alterar o objeto original.

## Explicação Teórica
O Proxy é um padrão estrutural que fornece um objeto substituto para outro objeto, controlando o acesso a ele. Este padrão pode ser utilizado para diversas finalidades, como controle de acesso, lazy loading, logging, cache, entre outras. O proxy tem a mesma interface que o objeto real, tornando-o transparente para os clientes que utilizam o objeto.

### Benefícios:
- **Controle de Acesso:** Pode restringir ou validar o acesso ao objeto real.
- **Lazy Loading:** Pode adiar a criação de um objeto até que ele seja realmente necessário.
- **Eficiência:** Pode reduzir o uso de recursos ao cachear resultados de operações dispendiosas.

## Exemplo Prático em PHP

Vamos implementar um exemplo usando PHP para demonstrar como o padrão Proxy pode ser aplicado em um sistema de imagens, onde as imagens são carregadas apenas quando necessário, utilizando um proxy de carregamento preguiçoso.

### PHP 7.4
[Código-fonte para PHP 7.4](../../src/structural-patterns/php7.4/ProxyExample.php)

### PHP 8.2
[Código-fonte para PHP 8.2](../../src/structural-patterns/php8.2/ProxyExample.php)

## Conclusão
O padrão Proxy é ideal para situações onde você precisa adicionar uma camada de controle ou otimização sobre um objeto sem alterar sua estrutura interna. Ele oferece uma maneira eficaz de gerir o acesso a objetos em sistemas complexos.

Interessado em aprender mais? Completamos aqui o conjunto de padrões estruturais. No próximo bloco, abordaremos os padrões comportamentais, começando com **Chain of Responsibility**.
