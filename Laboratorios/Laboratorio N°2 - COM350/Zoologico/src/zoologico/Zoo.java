package zoologico;

public class Zoo {
    private static Zoo instance = null;
    
    public Zoo getInstance() {
        if (instance == null) {
            instance = new Zoo();
        }
        return instance;
    }
    
    public IAnimal getAnimal(String _animal) {
        if (_animal == null) throw new IllegalArgumentException("No se ha especificado un animal");
        if (_animal.equalsIgnoreCase("bird")) return new Bird();
        if (_animal.equalsIgnoreCase("fish")) return new Fish();
        if (_animal.equalsIgnoreCase("mammal")) return new Mammal();
        return null;
    }
}
