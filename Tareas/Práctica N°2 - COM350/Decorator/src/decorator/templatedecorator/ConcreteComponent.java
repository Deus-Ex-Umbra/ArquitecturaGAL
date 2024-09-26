package decorator.templatedecorator;
public class ConcreteComponent implements Component{
    private Object atr1;
    private Object atr2;

    @Override
    public void execute() {
        System.out.println("Atributos: " + atr1 + " y " + atr2);
    }
    
    public ConcreteComponent(Object atr1, Object atr2) {
        this.atr1 = atr1;
        this.atr2 = atr2;
    }

    public Object getAtr1() {
        return atr1;
    }

    public void setAtr1(Object atr1) {
        this.atr1 = atr1;
    }

    public Object getAtr2() {
        return atr2;
    }

    public void setAtr2(Object atr2) {
        this.atr2 = atr2;
    }
    
}
