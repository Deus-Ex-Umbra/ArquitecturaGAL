package práctica.n.pkg2.com350.decoratortemplate;
import java.util.ArrayList;
import java.util.List;
public abstract class Decorator implements Component {
    protected Component component;
    protected List<Component> decorators = new ArrayList<>();
    public Decorator(Component _component) {
        this.component = _component;
    }
    public void addDecorator(Component _decorator) {
        this.decorators.add(_decorator);
    }
    public void removeDecorator(Component _decorator) {
        this.decorators.remove(_decorator);
    } 
    @Override
    public void decorate() {
        component.decorate();
        for (Component decorator : decorators) {
            decorator.decorate();
        }
    }
}
