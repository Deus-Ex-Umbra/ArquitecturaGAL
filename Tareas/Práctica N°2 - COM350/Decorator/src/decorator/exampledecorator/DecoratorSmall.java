package decorator.exampledecorator;
public class DecoratorSmall extends Decorator{

    public DecoratorSmall(Component text_decorate) {
        super(text_decorate);
    }
    
    @Override
    public String decorate() {
        return "<small>" + super.decorate() + "</small>";
    }
}
