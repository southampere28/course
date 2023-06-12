package mycourse;
import java.util.Scanner;
public class acara26array2dimensi_3 {
    public static void main(String[] args) {
        Scanner inputUser = new Scanner(System.in);
        System.out.print("Jumlah Mahasiswa : ");
        int n = inputUser.nextInt();
        String mahasiswa[][] = new String[n][3];
        for (int i = 0; i < n; i++) {
            System.out.println("");
            System.out.println("Data Mahasiswa ke "+(i+1));
            for (int j = 0; j < 3; j++) {
                if (j == 0)  System.out.print("NIM : ");
                else if (j == 1) System.out.print("Nama : ");
                else System.out.print("Jurusan : ");
                System.out.print("");
                mahasiswa[i][j] = inputUser.next();
            }
        }
        System.out.println("Data Mahasiswa yang dimasukan");
        System.out.println("----------------------------------------------");
        System.out.println("NIM \t\t NAMA \t\t JURUSAN \t");
        for (int i = 0; i < n; i++) {
            for (int j = 0; j < 3; j++) {
                System.out.print(mahasiswa[i][j] + "\t\t");
            }
            System.out.println();
        }
    }
}

