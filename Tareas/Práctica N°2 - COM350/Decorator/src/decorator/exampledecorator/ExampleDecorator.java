package decorator.exampledecorator;

import java.util.Scanner;
import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Paths;

public class ExampleDecorator {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Ingrese el texto inicial:");
        String initialText = scanner.nextLine();
        Component text_decorate = new TextFile(initialText);
        
        while (true) {
            System.out.println("\nMenú:");
            System.out.println("1. Agregar Tamaño");
            System.out.println("2. Agregar Negrilla");
            System.out.println("3. Agregar Resaltado");
            System.out.println("4. Agregar Cursiva");
            System.out.println("5. Reducir Tamaño");
            System.out.println("6. Agregar Tachado");
            System.out.println("7. Agregar Subrayado");
            System.out.println("8. Guardar y salir");
            System.out.print("Elija una opción: ");

            Integer option = scanner.nextInt();
            scanner.nextLine(); // Consume newline
            switch (option) {
                case 1:
                    text_decorate = new DecoratorBig(text_decorate);
                    break;
                case 2:
                    text_decorate = new DecoratorBold(text_decorate);
                    break;
                case 3:
                    text_decorate = new DecoratorHighlighted(text_decorate);
                    break;
                case 4:
                    text_decorate = new DecoratorItalic(text_decorate);
                    break;
                case 5:
                    text_decorate = new DecoratorSmall(text_decorate);
                    break;
                case 6:
                    text_decorate = new DecoratorStrikethrough(text_decorate);
                    break;
                case 7:
                    text_decorate = new DecoratorUnderline(text_decorate);
                    break;
                case 8:
                    try {
                        createHTML("html/decorated_text.html", text_decorate);
                        System.out.println("Archivo guardado. ¡Hasta luego!");
                        return;
                    } catch (IOException e) {
                        System.out.println("Error al guardar el archivo: " + e.getMessage());
                    }
                    break;
                default:
                    System.out.println("Opción no válida. Intente de nuevo.");
            }

            System.out.println("Texto actual: " + text_decorate.decorate());
        }
    }

    private static Component unwrapComponent(Component component) {
        if (component instanceof Decorator) {
            return unwrapComponent(((Decorator) component).getTextDecorate());
        }
        return component;
    }

    private static void createHTML(String _filename, Component text_decorate) throws IOException {
        // Crear directorios y guardar el archivo con el texto decorado completo
        Files.createDirectories(Paths.get(_filename).getParent());
        Files.write(Paths.get(_filename), text_decorate.decorate().getBytes());
        System.out.println("Archivo HTML " + (Files.exists(Paths.get(_filename)) ? "sobrescrito" : "creado") +
                           " exitosamente en: " + Paths.get(_filename).toAbsolutePath());
    }
}
