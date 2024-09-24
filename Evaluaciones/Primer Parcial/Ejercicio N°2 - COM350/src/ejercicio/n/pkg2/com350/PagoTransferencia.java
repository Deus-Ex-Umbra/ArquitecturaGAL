package ejercicio.n.pkg2.com350;
public class PagoTransferencia extends Pago implements IPago{
    private String glosa;
    private Boolean qr;

    public PagoTransferencia(String glosa, Boolean qr, String descripcion, Double monto) {
        super(descripcion, monto);
        this.glosa = glosa;
        this.qr = qr;
    }
    
    
    @Override
    public String detalle() {
        return "Detalles: " + this.descripcion + " Glosa:" + this.glosa + " Monto: " + this.monto + "QR: " + this.qr;
    }
}
