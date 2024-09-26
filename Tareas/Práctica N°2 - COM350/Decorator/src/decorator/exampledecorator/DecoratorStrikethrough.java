package decorator.exampledecorator;
public class DecoratorStrikethrough extends Decorator{

    public DecoratorStrikethrough(Component text_decorate) {
        super(text_decorate);
    }
    
    @Override
    public String decorate() {
        return "<u>" + super.decorate() + "</u>";
    }
}
