# Memento

## Introdução
O padrão Memento é utilizado para capturar e restaurar o estado interno de um objeto sem violar o princípio de encapsulamento. Ele permite que você salve o estado de um objeto para que possa ser restaurado mais tarde, útil em operações de desfazer (undo) ou em versões de estados.

## Explicação Teórica
O Memento é um padrão comportamental que permite salvar e restaurar o estado anterior de um objeto. Ele encapsula o estado em um objeto memento, preservando a integridade do objeto original e permitindo que o estado seja recuperado sem expor os detalhes internos.

### Benefícios:
- **Encapsulamento:** Mantém o princípio de encapsulamento, protegendo os detalhes internos do objeto.
- **Desfazer e Refazer:** Facilita a implementação de operações de desfazer e refazer.
- **Histórico:** Permite manter um histórico de estados de um objeto para referência ou recuperação futura.

## Exemplo Prático em PHP

Vamos implementar um exemplo usando PHP para demonstrar como o padrão Memento pode ser aplicado em um editor de texto simples, onde o estado do texto pode ser salvo e restaurado.

### PHP 7.4
[Código-fonte para PHP 7.4](../../src/behavioral-patterns/php7.4/MementoExample.php)

### PHP 8.2
[Código-fonte para PHP 8.2](../../src/behavioral-patterns/php8.2/MementoExample.php)

## Conclusão
O padrão Memento é ideal para situações onde você precisa manter um histórico de estados ou permitir operações de desfazer e refazer. Ele oferece uma maneira eficaz de capturar e restaurar o estado de um objeto, mantendo o encapsulamento e a integridade do sistema.

Interessado em aprender mais? Confira nosso próximo tópico sobre **Observer**!
