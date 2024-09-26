package decorator.templatedecorator;
public class ConcreteDecoratorB extends Decorator{
    public ConcreteDecoratorB(Component decorated_component) {
        super(decorated_component);
    }
    
    @Override
    public void execute() {
        super.execute();
        System.out.println("-------------------------------------------------");
    }
    
}
