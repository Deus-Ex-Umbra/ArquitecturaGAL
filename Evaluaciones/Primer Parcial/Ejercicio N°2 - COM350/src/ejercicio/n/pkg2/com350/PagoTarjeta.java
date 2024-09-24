package ejercicio.n.pkg2.com350;
public class PagoTarjeta extends Pago implements IPago{
    private String glosa;

    public PagoTarjeta(String glosa, String descripcion, Double monto) {
        super(descripcion, monto);
        this.glosa = glosa;
    }
    
    @Override
    public String detalle() {
        return "Detalles: " + this.descripcion + " Glosa:" + this.glosa + " Monto: " + this.monto;
    }
}
