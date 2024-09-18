package zoologico;
public class Mammal implements IAnimal{
    @Override
    public IBird getBird(String _type) {
        return null;
    }
    @Override
    public IFish getFish(String _type) {
        return null;
    }
    @Override
    public IMammal getMammal(String _type) {
        if (_type == null) throw new IllegalArgumentException("Debe especificarse un tipo");
        if (_type.equalsIgnoreCase("oso")) return new Bear();
        if (_type.equalsIgnoreCase("león")) return new Lion();
        if (_type.equalsIgnoreCase("mono")) return new Monkey();
        return null;
    }
}
