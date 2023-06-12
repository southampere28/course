package mycourse;
import java.util.Arrays;
import java.util.Scanner;
public class acara25array1dimensi_4 {
    public static void main(String[] args) {
        Scanner inputUser = new Scanner(System.in);
        int arr[] = new int[6];
        int genap[] = {};
        int ganjil[] = {};
        
        for (int i = 0; i < arr.length; i++) {
            System.out.print("Masukkan nilai Array ke-" + i + ": ");
            arr[i] = inputUser.nextInt();
        }
        for (int i = 0; i < arr.length; i++) {
            int bilangan = arr[i];
            if (bilangan % 2 == 0) {
                genap = Arrays.copyOf(genap, genap.length + 1);
                genap[genap.length - 1] = bilangan;
            } else {
                ganjil = Arrays.copyOf(ganjil, ganjil.length + 1);
                ganjil[ganjil.length - 1] = bilangan;
            }
        }

        for (int i = 0; i < genap.length; i++) {
            System.out.println("angka genap :" + genap[i]);
        }
        for (int i = 0; i < ganjil.length; i++) {
            System.out.println("angka ganjil :" + ganjil[i]);
        }
    }
}

