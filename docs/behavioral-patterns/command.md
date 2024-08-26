# Command

## Introdução
O padrão Command é utilizado para transformar solicitações em objetos, permitindo que você parametrize métodos com diferentes solicitações, filas de solicitações ou operações reversíveis. Ele encapsula uma solicitação como um objeto, o que facilita o tratamento de operações como desfazer, registrar ou repetir.

## Explicação Teórica
O Command é um padrão comportamental que encapsula uma solicitação como um objeto, permitindo que você parametrize clientes com diferentes solicitações, enfileire ou registre solicitações e suporte operações reversíveis. Ele desacopla o objeto que invoca a operação daquele que sabe como executá-la.

### Benefícios:
- **Desacoplamento:** Separa o objeto que invoca a operação do objeto que a executa.
- **Reusabilidade:** Permite a reutilização de comandos para diferentes operações.
- **Operações Reversíveis:** Facilita a implementação de operações de desfazer (undo) e refazer (redo).

## Exemplo Prático em PHP

Vamos implementar um exemplo usando PHP para demonstrar como o padrão Command pode ser aplicado em um sistema de controle remoto, onde diferentes comandos (ligar, desligar) podem ser executados em diferentes dispositivos (TV, luz).

### PHP 7.4
[Código-fonte para PHP 7.4](../../src/behavioral-patterns/php7.4/CommandExample.php)

### PHP 8.2
[Código-fonte para PHP 8.2](../../src/behavioral-patterns/php8.2/CommandExample.php)

## Conclusão
O padrão Command é ideal para cenários onde você precisa desacoplar a lógica de execução de uma operação da lógica de invocação. Ele oferece flexibilidade, reusabilidade e suporte para funcionalidades complexas como desfazer e refazer ações.

Interessado em aprender mais? Confira nosso próximo tópico sobre **Interpreter**!
