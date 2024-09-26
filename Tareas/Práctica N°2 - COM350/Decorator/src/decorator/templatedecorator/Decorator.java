package decorator.templatedecorator;
public class Decorator implements Component{
    protected Component decorated_component;

    public Decorator(Component decorated_component) {
        this.decorated_component = decorated_component;
    }
    
    @Override
    public void execute() {
        decorated_component.execute();
    }
}
