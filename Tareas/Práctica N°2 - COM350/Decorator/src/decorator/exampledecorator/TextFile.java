package decorator.exampledecorator;
import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Paths;

public class TextFile implements Component{
    private String text;

    public TextFile(String _text) {
        this.text = _text;
    }
    
    @Override
    public String decorate() {
        return text;
    }
}
