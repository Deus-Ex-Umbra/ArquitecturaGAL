package prototypepattern.manyprototype;

public class PrototypePattern {
    public static void main(String[] args) {
        ObjectFactory.initialize();
        Prototype object;
        Prototype object2;
        object = ObjectFactory.getClassPrototype();
        System.out.println("ClassPrototype: " + object.toString());

        object = ObjectFactory.getOneMoreClassPrototoype();
        System.out.println("OneMoreClassPrototype: " + object.toString());

        object = ObjectFactory.getotherClassPrototype();
        System.out.println("OtherClassPrototype: " + object.toString());

        object = ObjectFactory.getOneMoreClassPrototoype();
        System.out.println("OneMoreClassPrototype (clone): " + object.toString());

        object2 = ObjectFactory.getClassPrototype();
        System.out.println("ClassPrototype (clone): " + object2.toString());
    }
}
