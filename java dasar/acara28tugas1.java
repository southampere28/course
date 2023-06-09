package mycourse;
import java.util.Scanner;
public class acara28tugas1 {
    public static void main(String[] args) {
        Scanner userInput = new Scanner(System.in);
        System.out.print("masukkan angka = ");
        int angka = userInput.nextInt();
        int count = 0;
        
        for (int i = 2; i <= angka; i++) {
            if (angka % i == 0){
                count++;
            }
        }
        
        if (count == 1){
            System.out.println("termasuk bilangan prima");
        }
        else{
            System.out.println("bukan termasuk bilangan prima");
        }
    }
}

