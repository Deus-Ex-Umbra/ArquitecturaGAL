package zoologico;

public class Fish implements IAnimal {
    @Override
    public IBird getBird(String _type) {
        return null;
    }
    @Override
    public IFish getFish(String _type) {
        if (_type == null) throw new IllegalArgumentException("Debe especificarse un tipo");
        if (_type.equalsIgnoreCase("pacú")) return new Pacu();
        if (_type.equalsIgnoreCase("sábalo")) return new Tarpon();
        return null;
    }
    @Override
    public IMammal getMammal(String _type) {
        return null;
    }
}
