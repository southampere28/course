package mycourse;
import java.util.*;
public class Acara29praktikum6 {
    static int hitungLuasPermukaan(int p, int l, int t){
        int hasil = 2 * ((p * l) + (p * t) + (l * t));
        return hasil;
    }
    static int hitungVolume(int p, int l, int t){
        int hasil = p * l * t;
        return hasil;
    }
    public static void main(String[] args) {
        Scanner inputUser = new Scanner(System.in);
        System.out.print("masukkan panjang: ");
        int p = inputUser.nextInt();
        System.out.print("masukkan lebar: ");
        int l = inputUser.nextInt();
        System.out.print("masukkan tinggi: ");
        int t = inputUser.nextInt();
        System.out.println("Luas Permukaan Balok adalah: " + hitungLuasPermukaan(p, l, t));
        System.out.println("Volume Balok adalah: " + hitungVolume(p, l, t));
    }
}
