# Singleton

## Introdução
O padrão Singleton é utilizado para garantir que uma classe tenha apenas uma única instância e fornece um ponto global de acesso a essa instância. Este padrão é útil em situações onde exatamente um objeto é necessário para coordenar ações em todo o sistema.

## Explicação Teórica
O Singleton é um padrão criacional que assegura que uma classe tenha uma única instância e fornece um ponto global de acesso a ela. Isso é feito escondendo o construtor da classe e fornecendo um método estático que retorna a mesma instância cada vez que é chamado.

### Benefícios:
- **Controle de Acesso:** Garante que há apenas uma instância de uma classe.
- **Economia de Recursos:** Evita a criação de múltiplas instâncias desnecessárias.
- **Facilidade de Manutenção:** Centraliza o controle de instância em um único ponto de código.

## Exemplo Prático em PHP

Vamos implementar um exemplo usando PHP para demonstrar como o padrão Singleton pode ser aplicado para garantir que uma classe `Database` tenha apenas uma instância em todo o sistema.

### PHP 7.4
[Código-fonte para PHP 7.4](../../src/creational-patterns/php7.4/SingletonExample.php)

### PHP 8.2
[Código-fonte para PHP 8.2](../../src/creational-patterns/php8.2/SingletonExample.php)

## Conclusão
O padrão Singleton é ideal para situações em que é importante garantir que uma única instância de uma classe seja utilizada em todo o sistema, como no caso de gerenciadores de conexão de banco de dados, logs, ou configurações globais. Ele proporciona uma maneira simples de acessar uma instância única, promovendo eficiência e controle centralizado.

Interessado em aprender mais? Confira nosso próximo tópico sobre **Adapter**!
