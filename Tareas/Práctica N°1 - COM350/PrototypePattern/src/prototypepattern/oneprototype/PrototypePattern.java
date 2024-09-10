package prototypepattern.oneprototype;
public class PrototypePattern {
    public static void main(String[] args) {
        ClassPrototype original = new ClassPrototype("1", "A");
        System.out.println("Clase Original: " + original);
        ClassPrototype copy = (ClassPrototype) original.clone();
        System.out.println("Clase Copia: " + copy);
        copy.alterAtributes("ABC", 1);
        System.out.println("Clase Copia Modificada: " + copy);
    }
    
}
