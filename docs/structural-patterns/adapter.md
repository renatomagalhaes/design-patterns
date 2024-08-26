# Adapter

## Introdução
O padrão Adapter é utilizado para permitir que interfaces incompatíveis trabalhem juntas. Ele atua como um conversor, adaptando a interface de uma classe existente para que ela possa ser usada por outra classe, cuja interface é incompatível.

## Explicação Teórica
O Adapter é um padrão estrutural que converte a interface de uma classe em outra interface que o cliente espera. Ele permite que classes com interfaces incompatíveis colaborem entre si, sem a necessidade de modificar o código existente.

### Benefícios:
- **Reusabilidade:** Permite reutilizar classes existentes sem modificá-las.
- **Flexibilidade:** Facilita a integração de sistemas antigos com novos.
- **Desacoplamento:** Mantém o código cliente independente de implementações específicas de interfaces incompatíveis.

## Exemplo Prático em PHP

Vamos implementar um exemplo usando PHP para demonstrar como o padrão Adapter pode ser aplicado para integrar um sistema de leitura de arquivos XML com um sistema que espera dados em formato JSON.

### PHP 7.4
[Código-fonte para PHP 7.4](../../src/structural-patterns/php7.4/AdapterExample.php)

### PHP 8.2
[Código-fonte para PHP 8.2](../../src/structural-patterns/php8.2/AdapterExample.php)

## Conclusão
O padrão Adapter é ideal para situações onde é necessário integrar sistemas com interfaces incompatíveis ou adaptar uma classe antiga para ser utilizada em um novo contexto. Ele proporciona uma maneira simples de conectar diferentes componentes de software sem necessidade de alterar o código original.

Interessado em aprender mais? Confira nosso próximo tópico sobre **Bridge**!
