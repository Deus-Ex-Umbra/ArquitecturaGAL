package ejercicio.n.pkg2.com350;
import java.util.Scanner;
import java.util.ArrayList;
public class EjercicioN2COM350 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        ArrayList<IPago> pagos = new ArrayList<IPago>();
        FabricaPagos fabrica = new FabricaPagos();
        Integer opcion;
        Boolean ciclo = true;
        while (ciclo) {
            System.out.println("Registrar Pago");
            System.out.println("1. Efectivo");
            System.out.println("2. Tarjeta");
            System.out.println("3. Transferencia");
            System.out.println("4. Mostrar todos");
            opcion = sc.nextInt();
            switch(opcion) {
                case 1:
                    pagos.add(fabrica.obtenerPago(TipoPago.Efectivo));
                    break;
                case 2:
                    pagos.add(fabrica.obtenerPago(TipoPago.Tarjeta));
                    break;
                case 3:
                    pagos.add(fabrica.obtenerPago(TipoPago.Transferencia));
                case 4:
                    Integer indice = 1;
                    for (IPago pago : pagos) {
                        System.out.println("Pago N°:" + indice + ": " + pago.detalle());
                        indice ++;
                    }
            }
        }
    }
    
}
