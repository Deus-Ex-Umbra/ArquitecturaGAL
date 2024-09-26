package decorator.exampledecorator;
public class DecoratorBig extends Decorator {
    public DecoratorBig(Component text_decorate) {
        super(text_decorate);
    }
    
    @Override
    public String decorate() {
        return "<big>" + super.decorate() + "</big>";
    }
}
