package decorator.exampledecorator;
public class Decorator implements Component{
    protected Component text_decorate;

    public Decorator(Component text_decorate) {
        this.text_decorate = text_decorate;
    }
    
    @Override
    public String decorate() {
        return text_decorate.decorate();
    }

    public Component getTextDecorate() {
        return text_decorate;
    }
}
