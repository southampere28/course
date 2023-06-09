package mycourse;
import java.util.Scanner;
public class acara27tugas2matrix {
    public static void main(String[] args) {
        Scanner inputUser = new Scanner(System.in);
        System.out.println("pilih menu : \n1. Tambah matriks\n2. Kurang matriks\n3. Nilai maksimum baris\n4. Keluar");
        System.out.print("=> ");
        int menupilihan = inputUser.nextInt();
        if (menupilihan == 4){
            System.out.println("Anda Keluar Dari Program");
            System.exit(0);
        }
        System.out.print("masukin jumlah baris : ");
        int baris = inputUser.nextInt();
        System.out.print("masukin jumlah kolom : ");
        int kolom = inputUser.nextInt();
        int[][] matrix_a = new int[baris][kolom];
        int[][] matrix_b = new int[baris][kolom];
        
        if (baris == kolom){
            for (int i = 0; i < matrix_a.length; i++) {
                for (int j = 0; j < matrix_a[0].length; j++) {
                    System.out.printf("masukkan nilai matrix a pada baris ke-%d kolom ke-%d : ", i, j);
                    int isi_matrix_a = inputUser.nextInt();
                    matrix_a[i][j] = isi_matrix_a;
                }
            }
            
            for (int i = 0; i < matrix_b.length; i++) {
                for (int j = 0; j < matrix_b[0].length; j++) {
                    System.out.printf("masukkan nilai matrix b pada baris ke-%d kolom ke-%d : ", i, j);
                    int isi_matrix_b = inputUser.nextInt();
                    matrix_b[i][j] = isi_matrix_b;
                }
            }
            
            System.out.println();
            System.out.println("===== MATRIX A =====");

            for (int i = 0; i < matrix_a.length; i++) {
                System.out.print("[");
                for (int j = 0; j < matrix_a[0].length; j++) {
                        System.out.print(matrix_a[i][j]);
                        if (j < matrix_a[0].length -1) {
                            System.out.print(",");
                        }
                        else{
                            System.out.print("]");
                        }
                }
                System.out.println("");
            }
            System.out.println("====================");
            
            
            System.out.println();
            System.out.println("===== MATRIX B =====");

            for (int i = 0; i < matrix_b.length; i++) {
                System.out.print("[");
                for (int j = 0; j < matrix_b[0].length; j++) {
                        System.out.print(matrix_b[i][j]);
                        if (j < matrix_b[0].length -1) {
                            System.out.print(",");
                        }
                        else{
                            System.out.print("]");
                        }
                }
                System.out.println("");
            }
            System.out.println("====================");
            System.out.println("\n");
            
            switch(menupilihan){
                case 1:
                    System.out.println("=== Hasil Penjumlahan ===");
                    for (int i = 0; i < matrix_a.length; i++) {
                        System.out.print("[");
                        for (int j = 0; j < matrix_a[0].length; j++) {
                            System.out.print(matrix_a[i][j] + matrix_b[i][j]);
                            if (j < matrix_a[0].length-1){
                                System.out.print(",");
                            }
                            else{
                                System.out.println("]");
                            }
                        }}
                    break;
                case 2:
                    System.out.println("=== Hasil Pengurangan ===");
                     for (int i = 0; i < matrix_a.length; i++) {
                         System.out.print("[");
                        for (int j = 0; j < matrix_a[0].length; j++) {
                            System.out.print(matrix_a[i][j] - matrix_b[i][j]);
                            if (j < matrix_a[0].length-1){
                                System.out.print(",");
                            }
                            else{
                                System.out.println("]");
                            }
                        }}
                    break;
                case 3:
                    System.out.println("=== Nilai Maksimum Matrix a ===");
                    System.out.println("matrix a nilai terbesar");
                    int large = matrix_a[0][0];
                    for (int i = 0; i < matrix_a.length; i++) {
                        for (int j = 0; j < matrix_a[0].length; j++) {
                            if (large < matrix_a[i][j]){
                                large = matrix_a[i][j];
                            }
                        }
                    }
                    System.out.println("large value : " + large);
                    System.out.println("==========================");
                    
                    System.out.println("=== Nilai Maksimum Matrix b ===");
                    System.out.println("matrix b nilai terbesar");
                    large = matrix_b[0][0];
                    for (int i = 0; i < matrix_b.length; i++) {
                        for (int j = 0; j < matrix_b[0].length; j++) {
                            if (large < matrix_b[i][j]){
                                large = matrix_b[i][j];
                            }
                        }
                    }
                    System.out.println("large value : " + large);
                    System.out.println("==========================");
                    break;
                case 4:
                    System.out.println("keluar");
                default:
                    System.out.println("input salah");
            }
        }
        else{
            System.out.println("kesalahan input");
        }
    }
}
