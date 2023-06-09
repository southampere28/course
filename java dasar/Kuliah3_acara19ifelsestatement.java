package mycourse;
import java.util.*;
public class Kuliah3_acara19ifelsestatement {
    public static void main(String[] args){
        // declare variable bil
        int bil;
        Scanner userInput = new Scanner(System.in);
        System.out.print("masukkan angka = ");
        bil = userInput.nextInt();
        if (bil % 2 == 0){
            System.out.println("termasuk ke dalam golongan bilangan genap");
        }else{
            System.out.println("termasuk ke dalam golongan bilangan ganjil");
        }
    }
}
