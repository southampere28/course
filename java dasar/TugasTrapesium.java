package mudydev;
import java.util.Scanner;

public class TugasTrapesium {
    public static void main(String[] args){
        double Luas, Tinggi, SisiBawah, SisiAtas;
        Scanner Masukan = new Scanner(System.in);
        
        System.out.println("==== PROGRAM HITUNG LUAS TRAPESIUM ==== \n");
        
        System.out.print("masukkan tinggi trapesium = ");
        Tinggi = Masukan.nextDouble();
        System.out.print("masukkan panjang sisi bawah trapesium = ");
        SisiBawah = Masukan.nextDouble();
        System.out.print("masukkan panjang sisi atas trapesium = ");
        SisiAtas = Masukan.nextDouble();
        
        Luas = 0.5*(SisiAtas+SisiBawah)*Tinggi;
        
        System.out.println("\n === RINCIAN ===");
        System.out.println("tinggi = "+Tinggi);
        System.out.println("sisi atas = "+SisiAtas);
        System.out.println("sisi bawah = "+SisiBawah);
        System.out.println("Luas = 0.5*(SisiAtas+SisiBawah)*Tinggi \n");
        System.out.println("=== HASIL ===");
        System.out.println("Luas = "+Luas);
        
    }
}
