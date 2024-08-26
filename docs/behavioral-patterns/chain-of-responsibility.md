# Chain of Responsibility

## Introdução
O padrão Chain of Responsibility é utilizado para evitar o acoplamento entre o remetente de uma solicitação e seus receptores, ao permitir que múltiplos objetos tenham a oportunidade de processar a solicitação. A solicitação é passada ao longo da cadeia até que um dos objetos a processe.

## Explicação Teórica
O Chain of Responsibility é um padrão comportamental que cria uma cadeia de objetos receptores, permitindo que cada objeto trate a solicitação ou a passe adiante na cadeia. Isso promove o desacoplamento e a flexibilidade no tratamento de requisições.

### Benefícios:
- **Desacoplamento:** O cliente que envia a solicitação não precisa conhecer o manipulador final, promovendo a independência.
- **Flexibilidade:** Facilita a adição e remoção de manipuladores na cadeia sem afetar os outros elementos.
- **Divisão de Responsabilidade:** Permite que diferentes objetos compartilhem a responsabilidade de processar a solicitação.

## Exemplo Prático em PHP

Vamos implementar um exemplo usando PHP para demonstrar como o padrão Chain of Responsibility pode ser aplicado em um sistema de verificação de requisições, onde diferentes validadores podem ser encadeados para tratar a solicitação.

### PHP 7.4
[Código-fonte para PHP 7.4](../../src/behavioral-patterns/php7.4/ChainOfResponsibilityExample.php)

### PHP 8.2
[Código-fonte para PHP 8.2](../../src/behavioral-patterns/php8.2/ChainOfResponsibilityExample.php)

## Conclusão
O padrão Chain of Responsibility é ideal para cenários onde múltiplos objetos podem processar uma solicitação e a ordem ou combinação de manipuladores precisa ser facilmente configurável. Ele promove um design flexível e desacoplado, facilitando a manutenção e evolução do sistema.

Interessado em aprender mais? Confira nosso próximo tópico sobre **Command**!
