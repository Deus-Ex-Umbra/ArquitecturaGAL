package decorator.exampledecorator;
public class DecoratorHighlighted extends Decorator{

    public DecoratorHighlighted(Component text_decorate) {
        super(text_decorate);
    }
    
    @Override
    public String decorate() {
        return "<mark>" + super.decorate() + "</mark>";
    }
}
