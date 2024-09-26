package decorator.templatedecorator;
public class ConcreteDecoratorA extends Decorator {
    public ConcreteDecoratorA(Component decorated_component) {
        super(decorated_component);
    }
    
    @Override
    public void execute() {
        super.execute();
        System.out.println("-------------------------------------------------");
    }
}
