package decorator.exampledecorator;
public class DecoratorBold extends Decorator{
    public DecoratorBold(Component text_decorate) {
        super(text_decorate);
    }
    
    @Override
    public String decorate() {
        return "<b>" + super.decorate() + "</b>";
    }
}
