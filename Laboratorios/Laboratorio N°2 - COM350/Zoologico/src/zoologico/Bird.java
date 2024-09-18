package zoologico;

public class Bird implements IAnimal{
    @Override
    public IBird getBird(String _type) {
        if (_type == null) throw new IllegalArgumentException("Debe especificarse un tipo");
        if (_type.equalsIgnoreCase("loro")) return new Parrot();
        if (_type.equalsIgnoreCase("águila")) return new Eagle();
        if (_type.equalsIgnoreCase("cóndor")) return new Condor();
        return null;
    }
    @Override
    public IFish getFish(String _type) {
        return null;
    }
    @Override
    public IMammal getMammal(String _type) {
        return null;
    }
}
