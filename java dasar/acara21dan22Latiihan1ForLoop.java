package mycourse;
import java.util.*;
public class acara21dan22Latiihan1ForLoop {
    public static void main(String[] args) {
        int count;
        Scanner inputUser = new Scanner(System.in);
        System.out.print("masukkan jumlah angka : ");
        count = inputUser.nextInt();
        
        do {            
            System.out.println("Hai");
            count--;
        } while (count > 1);
    }
}


