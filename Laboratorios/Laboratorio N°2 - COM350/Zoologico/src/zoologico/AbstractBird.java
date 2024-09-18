package zoologico;
public class AbstractBird extends AbstractAnimal {
    protected Double weight;
    protected String wing_size;
    
    public AbstractBird(String _name, Double _weight, String _wing_size) {
        this.name = _name;
        this.weight = _weight;
        this.wing_size = _wing_size;
    }
    
    public Double getWeight() {
        return weight;
    }

    public void setWeight(Double _weight) {
        this.weight = _weight;
    }

    public String getWingSize() {
        return wing_size;
    }

    public void setWingSize(String _wing_size) {
        this.wing_size = _wing_size;
    }
}
