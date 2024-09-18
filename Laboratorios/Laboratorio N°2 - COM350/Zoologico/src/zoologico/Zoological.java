package zoologico;
import java.util.ArrayList;

public class Zoological {
    private String name;
    private ArrayList<Cage> list_cage;
    private String address;
    private String phone;

    public Zoological(String name, String address, String phone) {
        this.name = name;
        this.address = address;
        this.phone = phone;
        this.list_cage = new ArrayList();
    }
    
    
}
