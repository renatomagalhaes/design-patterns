# Padrões de Projeto em PHP 8.2

Este diretório contém implementações de padrões de projeto em PHP 8.2. Abaixo você encontrará um índice para cada padrão implementado, com uma explicação detalhada do código correspondente. Clique no nome do padrão para ser redirecionado ao código-fonte.

## Índice

### Padrões Criacionais

1. **[Factory Method](./creational-patterns/php8.2/FactoryMethod.php)**  
   O padrão Factory Method fornece uma interface para criar objetos em uma superclasse, mas permite que as subclasses alterem o tipo de objeto que será criado.

   > **Explicação do Código:**  
   O exemplo demonstra como diferentes criadores concretos (`ConcreteCreatorA` e `ConcreteCreatorB`) implementam o método `FactoryMethod()` para retornar produtos específicos (`ConcreteProductA` e `ConcreteProductB`). O cliente interage com o criador através da interface `Creator` e recebe produtos sem precisar conhecer as classes concretas.

2. **[Abstract Factory](./creational-patterns/php8.2/AbstractFactory.php)**  
   O padrão Abstract Factory fornece uma interface para criar famílias de objetos relacionados ou dependentes sem especificar suas classes concretas.

   > **Explicação do Código:**  
   O exemplo demonstra como fábricas concretas (`ConcreteFactory1` e `ConcreteFactory2`) criam produtos relacionados (`ConcreteProductA1`, `ConcreteProductB1`, etc.). O cliente utiliza a fábrica abstrata para criar produtos, garantindo que os produtos criados sejam compatíveis entre si.

3. **[Builder](./creational-patterns/php8.2/Builder.php)**  
   O padrão Builder separa a construção de um objeto complexo de sua representação, permitindo que o mesmo processo de construção crie diferentes representações.

   > **Explicação do Código:**  
   O exemplo ilustra como o `Director` constrói uma casa (`House`) usando um `ConcreteHouseBuilder`. A interface `HouseBuilder` define os métodos para construir as partes da casa, e o `ConcreteHouseBuilder` fornece a implementação para construir a casa peça por peça.

4. **[Prototype](./creational-patterns/php8.2/Prototype.php)**  
   O padrão Prototype cria novos objetos ao clonar uma instância existente, conhecida como protótipo.

   > **Explicação do Código:**  
   O exemplo mostra como objetos protótipo (`ConcretePrototype1` e `ConcretePrototype2`) implementam a interface `Prototype` para permitir a clonagem. O método `Clone()` retorna uma nova instância que é uma cópia do protótipo original.

5. **[Singleton](./creational-patterns/php8.2/Singleton.php)**  
   O padrão Singleton garante que uma classe tenha apenas uma instância e fornece um ponto global de acesso a ela.

   > **Explicação do Código:**  
   O exemplo demonstra como a função `getInstance()` garante que apenas uma instância do `Singleton` seja criada e usada durante toda a execução do programa. O uso de `static` assegura que a instância seja criada uma única vez.

### Padrões Estruturais

1. **[Adapter](./structural-patterns/php8.2/Adapter.php)**  
   O padrão Adapter permite que interfaces incompatíveis trabalhem juntas, convertendo a interface de uma classe em outra interface que o cliente espera.

   > **Explicação do Código:**  
   O exemplo demonstra como o `Adapter` converte a interface do `Adaptee` (`specificRequest()`) em uma interface compatível com o `Target` (`request()`). O `Client` pode então usar o `Adapter` para interagir com o `Adaptee` através da interface `Target`.

2. **[Bridge](./structural-patterns/php8.2/Bridge.php)**  
   O padrão Bridge desacopla uma abstração da sua implementação, permitindo que ambos possam variar independentemente.

   > **Explicação do Código:**  
   O exemplo ilustra como a `Abstraction` e sua implementação (`Implementor`) podem variar independentemente. A `RefinedAbstraction` usa um `Implementor` para realizar operações, permitindo que diferentes implementações sejam usadas sem alterar a abstração.

3. **[Composite](./structural-patterns/php8.2/Composite.php)**  
   O padrão Composite permite que objetos sejam compostos em estruturas de árvore para representar hierarquias parte-todo. O Composite permite que os clientes tratem objetos individuais e composições de objetos de forma uniforme.

   > **Explicação do Código:**  
   O exemplo mostra como `Composite` e `Leaf` implementam a interface `Component`, permitindo que `Composite` contenha uma coleção de `Components`. O `Client` pode tratar `Leaf` e `Composite` da mesma forma, compondo hierarquias complexas de objetos.

4. **[Decorator](./structural-patterns/php8.2/Decorator.php)**  
   O padrão Decorator permite que comportamentos sejam adicionados a objetos de maneira dinâmica, fornecendo uma alternativa flexível à herança para estender funcionalidades.

   > **Explicação do Código:**  
   O exemplo demonstra como `ConcreteComponent` pode ser decorado com `ConcreteDecoratorA` e `ConcreteDecoratorB`, que adicionam funcionalidades adicionais ao `Component` de maneira dinâmica, sem modificar o código do `ConcreteComponent`.

5. **[Facade](./structural-patterns/php8.2/Facade.php)**  
   O padrão Facade fornece uma interface simplificada para um conjunto de interfaces em um subsistema, tornando-o mais fácil de usar.

   > **Explicação do Código:**  
   O exemplo mostra como a `Facade` simplifica as interações com os subsistemas (`SubsystemA`, `SubsystemB`, `SubsystemC`), permitindo que o `Client` interaja com uma única interface, em vez de lidar com a complexidade dos subsistemas diretamente.

6. **[Flyweight](./structural-patterns/php8.2/Flyweight.php)**  
   O padrão Flyweight permite que muitos objetos similares compartilhem um único estado comum para economizar memória.

   > **Explicação do Código:**  
   O exemplo demonstra como o `FlyweightFactory` gerencia e compartilha instâncias de `Flyweight`. Isso permite que objetos com estado compartilhado sejam reutilizados para economizar recursos, especialmente em aplicações que criam muitos objetos semelhantes.

7. **[Proxy](./structural-patterns/php8.2/Proxy.php)**  
   O padrão Proxy fornece um substituto ou marcador para outro objeto, controlando o acesso a ele.

   > **Explicação do Código:**  
   O exemplo mostra como o `Proxy` controla o acesso ao `RealSubject`, adicionando funcionalidades como controle de acesso e registro de logs antes de delegar as solicitações ao `RealSubject`.

### Padrões Comportamentais

1. **[Chain of Responsibility](./behavioral-patterns/php8.2/ChainOfResponsibility.php)**  
   O padrão Chain of Responsibility permite que mais de um objeto trate uma solicitação, desacoplando o remetente do receptor ao dar a chance a múltiplos objetos de processar a solicitação.

   > **Explicação do Código:**  
   O exemplo demonstra como os manipuladores (`ConcreteHandler1`, `ConcreteHandler2`) são encadeados e processam uma solicitação. Cada manipulador decide se trata a solicitação ou a passa para o próximo na cadeia.

2. **[Command](./behavioral-patterns/php8.2/Command.php)**  
   O padrão Command encapsula uma solicitação como um objeto, permitindo que você parametrize clientes com diferentes solicitações, enfileire ou registre solicitações e suporte operações que podem ser desfeitas.

   > **Explicação do Código:**  
   O exemplo ilustra como comandos (`ConcreteCommand1`, `ConcreteCommand2`) encapsulam ações no `Receiver` e permitem que o `Invoker` execute as ações sem conhecer os detalhes de implementação.

3. **[Interpreter](./behavioral-patterns/php8.2/Interpreter.php)**  
   O padrão Interpreter define uma representação gramatical para uma linguagem e um interpretador para lidar com essa gramática.

   > **Explicação do Código:**  
   O exemplo mostra como expressões (`NumberExpression`, `AdditionExpression`, `SubtractionExpression`) podem ser interpretadas em uma linguagem específica. O código cliente demonstra como tokens são convertidos em expressões e então interpretados para calcular o resultado.

4. **[Iterator](./behavioral-patterns/php8.2/Iterator.php)**  
   O padrão Iterator fornece uma maneira de acessar sequencialmente os elementos de uma coleção sem expor a sua representação subjacente.

   > **Explicação do Código:**  
   O exemplo demonstra como `ConcreteAggregate` cria um `ConcreteIterator` que itera sobre uma coleção de itens. O cliente usa o iterador para acessar os elementos da coleção sem precisar conhecer a estrutura interna da coleção.

5. **[Mediator](./behavioral-patterns/php8.2/Mediator.php)**  
   O padrão Mediator define um objeto que encapsula como um conjunto de objetos interage, promovendo o desacoplamento desses objetos ao evitar que eles referenciem uns aos outros diretamente.

   > **Explicação do Código:**  
   O exemplo ilustra como o `ConcreteMediator` gerencia a interação entre `ConcreteComponent1` e `ConcreteComponent2`, centralizando a comunicação e promovendo o desacoplamento entre os componentes.

6. **[Memento](./behavioral-patterns/php8.2/Memento.php)**  
   O padrão Memento captura e externaliza o estado interno de um objeto para que ele possa ser restaurado mais tarde sem violar o encapsulamento.

   > **Explicação do Código:**  
   O exemplo demonstra como o `Originator` cria um `Memento` para salvar seu estado e como o `Caretaker` gerencia esses mementos. O cliente pode restaurar o estado anterior do `Originator` a partir de um memento armazenado.

7. **[Observer](./behavioral-patterns/php8.2/Observer.php)**  
   O padrão Observer define uma dependência um-para-muitos entre objetos, de forma que quando um objeto muda de estado, todos os seus dependentes são notificados e atualizados automaticamente.

   > **Explicação do Código:**  
   O exemplo mostra como o `ConcreteSubject` notifica seus observadores (`ConcreteObserver`) sobre mudanças de estado. Os observadores são automaticamente atualizados quando o estado do sujeito muda.

8. **[State](./behavioral-patterns/php8.2/State.php)**  
   O padrão State permite que um objeto altere seu comportamento quando seu estado interno muda, fazendo o objeto parecer mudar de classe.

   > **Explicação do Código:**  
   O exemplo demonstra como o `Context` muda de estado dinamicamente entre `ConcreteStateA` e `ConcreteStateB`, e como cada estado define um comportamento diferente para o `Context`.

9. **[Strategy](./behavioral-patterns/php8.2/Strategy.php)**  
   O padrão Strategy define uma família de algoritmos, encapsula cada um deles e os torna intercambiáveis.

   > **Explicação do Código:**  
   O exemplo ilustra como o `Context` pode usar diferentes estratégias (`ConcreteStrategyAdd`, `ConcreteStrategySubtract`, `ConcreteStrategyMultiply`) para realizar operações de forma intercambiável.

10. **[Template Method](./behavioral-patterns/php8.2/TemplateMethod.php)**  
    O padrão Template Method define o esqueleto de um algoritmo na superclasse, mas permite que subclasses sobrescrevam etapas específicas do algoritmo sem alterar sua estrutura.

    > **Explicação do Código:**  
    O exemplo mostra como `ConcreteClassA` e `ConcreteClassB` implementam passos específicos de um algoritmo, enquanto a estrutura do algoritmo é definida na `BaseClass`.

11. **[Visitor](./behavioral-patterns/php8.2/Visitor.php)**  
    O padrão Visitor permite definir uma nova operação sem mudar as classes dos elementos sobre os quais opera.

    > **Explicação do Código:**  
    O exemplo mostra como diferentes visitantes (`ConcreteVisitor1`, `ConcreteVisitor2`) podem operar sobre uma coleção de elementos (`ConcreteElementA`, `ConcreteElementB`), aplicando diferentes operações sem modificar os elementos.

---

Este arquivo serve como um guia para explorar e entender os diferentes padrões de projeto implementados em PHP 8.2. Cada link direciona você ao código-fonte do padrão, acompanhado de uma explicação detalhada para ajudar na compreensão do funcionamento de cada padrão.
