package ejercicio.n.pkg2.com350;
import java.util.Scanner;
public class FabricaPagos {
    private Scanner sc = new Scanner(System.in);
    private String descripcion, glosa, qr_s;
    private Double monto;
    private Boolean qr;
    public IPago obtenerPago(TipoPago _tipo) {
        solicitarDetalles();
        switch(_tipo) {
            case TipoPago.Efectivo:
                return new PagoEfectivo(descripcion, monto);
            case TipoPago.Tarjeta:
                solicitarGlosa();
                return new PagoTarjeta(glosa, descripcion, monto);
            case TipoPago.Transferencia:
                solicitarGlosa();
                solicitarQR();
                return new PagoTransferencia(glosa, qr, descripcion, monto);
            default:
                return null;    
        }
    }
    private void solicitarDetalles() {
        System.out.print("Ingrese una descripción: ");
        descripcion = sc.nextLine();
        System.out.print("Ingrese un monto: ");
        monto = sc.nextDouble();
        sc.nextLine(); //Limpiando el Buffer
    }
    private void solicitarGlosa() {
        System.out.print("Escriba la glosa: ");
        glosa = sc.nextLine();
    }
    
    private void solicitarQR() {
        System.out.print("Se usó QR: ");
        System.out.print("1. Sí");
        System.out.print("0. No");
        qr_s = sc.nextLine();
        if (qr_s.equals(1) || qr_s.equals("1")) qr = true;
        else qr = false;
    }
}
