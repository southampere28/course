package mycourse;
import java.util.Scanner;
public class acara25array1dimensi_3 {
    public static void main(String[] args) {
        Scanner inputUser = new Scanner(System.in);
        int nilaiUAS[] = new int[6];
        
        // a. ubah statement input nilai uas menjadi seperti gambar dibawah
        for (int i = 0; i < nilaiUAS.length; i++) {
            System.out.print("Masukkan nilai UAS ke-" + i + ": ");
            nilaiUAS[i] = inputUser.nextInt();
        }
        
        for (int i = 0; i < 6; i++) {
            System.out.println("Nilai UAS ke-" + i + " adalah " + nilaiUAS[i]);
        }
        // tidak terjadi perubahan karena nilaiUAS.length nya = 6
        System.out.println("========================= \n");
        
        
        // b. apa kegunaan dari nilaiUAS.length?
        // menghitung panjang data dari pada array nilaiUAS
        
        // c. ubah statement cetak menjadi menampilkan mahasiswa yang lulus saja
       // modifikasi program agar mahasiswa ditandai mana yang lulus dan tidak lulus
        for (int i = 0; i < nilaiUAS.length; i++) {
            if (nilaiUAS[i] > 70) {
                System.out.println("Mahasiswa ke-" + i + " lulus");
            }
            else{
                System.out.println("Mahasiswa ke-" + i + " tidak lulus");
            }
        }
         
    }
}

