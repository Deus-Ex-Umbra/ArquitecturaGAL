package decorator.exampledecorator;
public class DecoratorUnderline extends Decorator{

    public DecoratorUnderline(Component text_decorate) {
        super(text_decorate);
    }
    
    @Override
    public String decorate() {
        return "<s>" + super.decorate() + "</s>";
    }
}
