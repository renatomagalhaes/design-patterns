# Builder

## Introdução
O padrão Builder é utilizado para construir objetos complexos passo a passo. Ele permite que você crie diferentes tipos e representações de um objeto utilizando o mesmo código de construção. Este padrão é particularmente útil quando a criação de um objeto envolve várias etapas e a sequência de passos pode variar.

## Explicação Teórica
O Builder é um padrão criacional que separa a construção de um objeto complexo da sua representação final. O processo de construção é isolado dentro de uma classe `Builder`, enquanto a representação final é produzida por uma classe `Director` que controla a ordem e as etapas de construção.

### Benefícios:
- **Flexibilidade:** Permite a criação de diferentes representações do objeto construído, reutilizando o código de construção.
- **Manutenção:** Facilita a adição de novos tipos de objetos complexos sem alterar o código existente.
- **Isolamento:** Separa a lógica de construção do objeto da sua estrutura interna, promovendo o princípio de responsabilidade única.

## Exemplo Prático em PHP

Vamos implementar um exemplo usando PHP para demonstrar como o padrão Builder pode ser aplicado na construção de um `Car` (Carro), onde diferentes partes do carro (motor, rodas, etc.) podem ser construídas em etapas separadas.

### PHP 7.4
[Código-fonte para PHP 7.4](../../src/creational-patterns/php7.4/BuilderExample.php)

### PHP 8.2
[Código-fonte para PHP 8.2](../../src/creational-patterns/php8.2/BuilderExample.php)

## Conclusão
O padrão Builder é ideal para criar objetos complexos que requerem várias etapas de construção. Ele permite que diferentes tipos de objetos sejam criados utilizando o mesmo processo de construção, mantendo o código limpo e fácil de manter.

Interessado em aprender mais? Confira nosso próximo tópico sobre **Prototype**!
