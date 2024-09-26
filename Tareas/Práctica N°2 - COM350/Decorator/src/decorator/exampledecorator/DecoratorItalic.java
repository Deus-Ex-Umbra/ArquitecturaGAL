package decorator.exampledecorator;
public class DecoratorItalic extends Decorator{

    public DecoratorItalic(Component text_decorate) {
        super(text_decorate);
    }
    
    @Override
    public String decorate() {
        return "<i>" + super.decorate() + "</i>";
    }
}
