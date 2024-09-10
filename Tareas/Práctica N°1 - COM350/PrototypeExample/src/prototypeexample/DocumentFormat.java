package prototypeexample;

class DocumentFormat implements Prototype {
    private String titulo;
    private String asunto;
    private String texto;

    public DocumentFormat(String titulo, String asunto, String texto) {
        this.titulo = titulo;
        this.asunto = asunto;
        this.texto = texto;
    }

    public String getTitulo() {
        return titulo;
    }

    public void setTitulo(String titulo) {
        this.titulo = titulo;
    }

    public void setAsunto(String asunto) {
        this.asunto = asunto;
    }

    public void setTexto(String texto) {
        this.texto = texto;
    }

    @Override
    public DocumentFormat clone() {
        try {
            return (DocumentFormat) super.clone();
        } catch (CloneNotSupportedException e) {
            return new DocumentFormat(this.titulo, this.asunto, this.texto);
        }
    }

    @Override
    public String toString() {
        return "Título: " + titulo + "\nAsunto: " + asunto + "\nTexto: " + texto + "\n";
    }
}