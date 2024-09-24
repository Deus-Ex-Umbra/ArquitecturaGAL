package ejercicio.n.pkg2.com350;
public abstract class Pago {
    protected String descripcion;
    protected Double monto;

    public Pago(String descripcion, Double monto) {
        this.descripcion = descripcion;
        this.monto = monto;
    }
}
