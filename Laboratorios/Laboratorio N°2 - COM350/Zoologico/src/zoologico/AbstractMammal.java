package zoologico;
public class AbstractMammal extends AbstractAnimal {
    protected String temperature;
    protected Integer number_legs;
    protected String color;

    public String getTemperature() {
        return temperature;
    }

    public void setTemperature(String _temperature) {
        this.temperature = _temperature;
    }

    public Integer getNumberLegs() {
        return number_legs;
    }

    public void setNumberLegs(Integer _number_legs) {
        this.number_legs = _number_legs;
    }

    public String getColor() {
        return color;
    }

    public void setColor(String _color) {
        this.color = _color;
    }
}
