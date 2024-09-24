package ejercicio.n.pkg2.com350;
public class PagoEfectivo extends Pago implements IPago {

    public PagoEfectivo(String descripcion, Double monto) {
        super(descripcion, monto);
    }
    
    @Override
    public String detalle() {
        return "Detalles: " + this.descripcion + " Monto: " + this.monto;
    }
}
