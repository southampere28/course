package mycourse;
import java.util.Scanner;
public class switchcasePemrogrananDasar {
    public static void main(String[] args) {
        Scanner inputUser = new Scanner(System.in);
        System.out.print("pilih warna (merah, kuning, hijau?)");
        String warna = inputUser.nextLine();
        
        switch(warna){            
            case "merah":
                System.out.println("Anda harus berhenti");
                break;
            case "kuning":
                System.out.println("Persiapan berhenti");
                break;
            case "hijau":
                System.out.println("Silahkan jalan");
                break;
            default:
                System.out.println("warna salah");
        }
    }
}

