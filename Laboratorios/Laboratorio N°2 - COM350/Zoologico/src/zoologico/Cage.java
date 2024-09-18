package zoologico;
public class Cage {
    private IAnimal animal;
    private Double height;
    private Double width;
    private Double length;

    public Cage(IAnimal animal, Double height, Double width, Double length) {
        this.animal = animal;
        this.height = height;
        this.width = width;
        this.length = length;
    }
}
