package mycourse;
import java.util.Scanner;
public class Acara35Latihan1 {
    static int baris = 5;
    
    public static void main(String[] args) {
        Scanner inputUser = new Scanner(System.in);
        System.out.print("Masukkan Jumlah Baris: ");
        baris = inputUser.nextInt();
        printPyramid(0);
    }
    static void printPyramid(int i){
        printSpasi(0, i);
        printBintang(baris, i);
        System.out.println();
        
        if (++i < baris)
            printPyramid(i);
    }
    static void printSpasi(int j, int i){
        if (j < baris - i - 1){
            System.out.print(" ");
            printSpasi(j + 1, i);
        }
    }
    static void printBintang(int k, int i){
        if (k > baris - i - 1){
            System.out.print("* ");
            printBintang(k - 1, i);
        }
    }
}
