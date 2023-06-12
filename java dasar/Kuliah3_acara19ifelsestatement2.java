package mycourse;
import java.util.Scanner;
public class Kuliah3_acara19ifelsestatement2 {
    public static void main(String[] args){
        int nilai;
        Scanner inputUser = new Scanner(System.in);
        System.out.print("masukkan nilai = ");
        nilai = inputUser.nextInt();
        if (nilai >= 100){
            nilai += 10;
        }else{
            nilai -= 10;
        }
            System.out.println("Hasil Nilai Akhir adalah " + nilai);
    }
}
