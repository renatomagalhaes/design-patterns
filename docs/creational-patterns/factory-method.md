# Factory Method

## Introdução
No desenvolvimento de software, muitas vezes precisamos criar objetos de uma maneira flexível, sem que o código que solicita a criação precise saber qual classe exata será instanciada. O padrão Factory Method ajuda a resolver esse problema ao fornecer uma interface para a criação de objetos, permitindo que as subclasses decidam qual classe instanciar.

## Explicação Teórica
O Factory Method é um padrão de projeto criacional que define um método que deve ser implementado pelas subclasses para criar objetos de uma classe específica. Isso permite que o código que utiliza o Factory Method seja independente de quais classes concretas são instanciadas, promovendo flexibilidade e escalabilidade.

### Benefícios:
- **Desacoplamento:** O código que solicita a criação do objeto não precisa saber sobre as classes concretas.
- **Facilidade de Manutenção:** Novas classes de objetos podem ser adicionadas sem modificar o código existente.
- **Flexibilidade:** O padrão permite que o sistema decida, em tempo de execução, qual classe concreta deve ser instanciada.

## Exemplo Prático em PHP

Vamos implementar um exemplo simples usando PHP, onde temos uma logística que pode usar diferentes meios de transporte (caminhão ou navio) para entregar produtos.

### PHP 7
[Código-fonte para PHP 7.4](../../src/creational-patterns/php7.4/FactoryMethodExample.php)

### PHP 8.2
[Código-fonte para PHP 8.2](../../src/creational-patterns/php8.2/FactoryMethodExample.php)

## Conclusão
O padrão Factory Method é ideal para situações onde o tipo de objeto a ser criado pode variar, mas o código que utiliza esses objetos deve permanecer flexível e modular. Ele proporciona uma maneira elegante de criar objetos, mantendo o código limpo e fácil de manter.

Interessado em aprender mais? Confira nosso próximo tópico sobre **Abstract Factory**!
