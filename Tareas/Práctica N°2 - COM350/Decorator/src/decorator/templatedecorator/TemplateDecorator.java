package decorator.templatedecorator;
public class TemplateDecorator {
    public static void main(String[] args) {
        Component component = new ConcreteComponent("BaseArg1", "BaseArg2");
        Component decoratedComponentA = new ConcreteDecoratorA(component);
        Component fullyDecoratedComponent = new ConcreteDecoratorB(decoratedComponentA);
        fullyDecoratedComponent.execute();
    }
}
