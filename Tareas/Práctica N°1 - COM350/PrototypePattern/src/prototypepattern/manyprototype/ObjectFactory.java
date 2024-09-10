package prototypepattern.manyprototype;
public class ObjectFactory {
    static private ClassPrototype original_class;
    static private OtherClassPrototype original_other;
    static private OneMoreClassPrototype original_one;
    
    static public void initialize() {
        original_class = new ClassPrototype("ABC", true);
        original_other = new OtherClassPrototype("123", 'd');
        original_one = new OneMoreClassPrototype(false, 5.12);
    }
    
    static public Prototype getClassPrototype() {
        return original_class.clone();
    }
    
    static public Prototype getotherClassPrototype() {
        return original_other.clone();
    }
    
    static public Prototype getOneMoreClassPrototoype() {
        return original_one.clone();
    }
}
