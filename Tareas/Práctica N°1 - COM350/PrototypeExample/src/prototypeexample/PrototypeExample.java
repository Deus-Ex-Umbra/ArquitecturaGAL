package prototypeexample;

import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class PrototypeExample {
    private static List<DocumentFormat> plantillas = new ArrayList<>();
    private static List<DocumentFormat> documentosCreados = new ArrayList<>();

    public static void main(String[] args) {
        inicializarPlantillas();
        Scanner scanner = new Scanner(System.in);
        int opcion;

        do {
            System.out.println("\n--- Menú ---");
            System.out.println("1. Crear nuevo documento basado en plantilla");
            System.out.println("2. Ver todas las plantillas");
            System.out.println("3. Mostrar documentos creados");
            System.out.println("4. Salir");
            System.out.print("Seleccione una opción: ");
            
            opcion = scanner.nextInt();
            scanner.nextLine();

            switch (opcion) {
                case 1:
                    crearDocumento(scanner);
                    break;
                case 2:
                    mostrarPlantillas();
                    break;
                case 3:
                    mostrarDocumentosCreados();
                    break;
                case 4:
                    System.out.println("Saliendo del programa...");
                    break;
                default:
                    System.out.println("Opción no válida. Intente de nuevo.");
            }
        } while (opcion != 4);

        scanner.close();
    }

    private static void inicializarPlantillas() {
        plantillas.add(new DocumentFormat("Carta", "Comunicación formal", "Estimado/a [Nombre],\n\nContenido de la carta...\n\nAtentamente,\n[Tu Nombre]"));
        plantillas.add(new DocumentFormat("Renuncia", "Finalización de relación laboral", "Estimado/a [Nombre del empleador],\n\nPor medio de la presente, le comunico mi decisión de renunciar...\n\nAtentamente,\n[Tu Nombre]"));
        plantillas.add(new DocumentFormat("Invitación", "Evento social", "Querido/a [Nombre],\n\nTe invitamos cordialmente a...\n\nEsperamos contar con tu presencia.\n\nSaludos,\n[Tu Nombre]"));
    }

    private static void mostrarPlantillas() {
        System.out.println("\nPlantillas disponibles:");
        for (int i = 0; i < plantillas.size(); i++) {
            System.out.println((i + 1) + ". " + plantillas.get(i).getTitulo());
        }
    }

    private static void crearDocumento(Scanner scanner) {
        mostrarPlantillas();
        System.out.print("Seleccione el número de la plantilla a usar: ");
        int indexPlantilla = scanner.nextInt() - 1;
        scanner.nextLine(); // Consumir el salto de línea

        if (indexPlantilla >= 0 && indexPlantilla < plantillas.size()) {
            DocumentFormat nuevaInstancia = plantillas.get(indexPlantilla).clone();
            
            System.out.print("Nuevo título (deje en blanco para mantener el actual): ");
            String nuevoTitulo = scanner.nextLine();
            if (!nuevoTitulo.isEmpty()) {
                nuevaInstancia.setTitulo(nuevoTitulo);
            }

            System.out.print("Nuevo asunto (deje en blanco para mantener el actual): ");
            String nuevoAsunto = scanner.nextLine();
            if (!nuevoAsunto.isEmpty()) {
                nuevaInstancia.setAsunto(nuevoAsunto);
            }

            System.out.print("Nuevo texto (deje en blanco para mantener el actual): ");
            String nuevoTexto = scanner.nextLine();
            if (!nuevoTexto.isEmpty()) {
                nuevaInstancia.setTexto(nuevoTexto);
            }

            documentosCreados.add(nuevaInstancia);
            System.out.println("\nDocumento creado y añadido a la lista:");
            System.out.println(nuevaInstancia);
        } else {
            System.out.println("Número de plantilla no válido.");
        }
    }

    private static void mostrarDocumentosCreados() {
        if (documentosCreados.isEmpty()) {
            System.out.println("No se han creado documentos aún.");
        } else {
            System.out.println("\nDocumentos creados:");
            for (int i = 0; i < documentosCreados.size(); i++) {
                System.out.println("Documento " + (i + 1) + ":");
                System.out.println(documentosCreados.get(i));
                System.out.println("--------------------");
            }
        }
    }
}
