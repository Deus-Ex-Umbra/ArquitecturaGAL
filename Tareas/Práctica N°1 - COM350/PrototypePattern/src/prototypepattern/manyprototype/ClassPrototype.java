package prototypepattern.manyprototype;

public class ClassPrototype implements Prototype{
    Object atribute1;
    Object atribute2;
     //... more Atributes
    
    public ClassPrototype(Object _atribute1, Object _atribute2) {
        atribute1 = _atribute1;
        atribute2 = _atribute2;
        //... more initialize atributes
    }
    
    //... Getters and Setters
    
    //.. Other Methods
    
    public void alterAtributes(Object _atribute1, Object _atribute2) {
        this.atribute1 = _atribute1;
        this.atribute2 = _atribute2;
    }
    
    @Override
    public Prototype clone() {
        try {
            return (ClassPrototype) super.clone();
        } catch (Exception _ex) {
            System.out.println(_ex.getMessage().toString());
            return null;
        }
    }
    
    @Override
    public String toString() {
        return "Atribute 1: " + atribute1.toString() + " Atribute2: " + atribute2.toString();
    }
}