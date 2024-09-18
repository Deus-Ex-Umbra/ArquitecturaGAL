package zoologico;
public interface IAnimal {
    IBird getBird(String _type);
    IFish getFish(String _type);
    IMammal getMammal(String _type);
}
