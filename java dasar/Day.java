package mycourse;
import java.util.*;
public class Day {
    public static void main(String[] args){
        int hari;
        Scanner inputUser = new Scanner(System.in);
        System.out.print("masukkan angka untuk hari = ");
        hari = inputUser.nextInt();
        switch(hari){
            case 1:
                System.out.println("Sekarang Hari Senin");
                break;
            case 2:
                System.out.println("Sekarang Hari Selasa");
                break;
            case 3:
                System.out.println("Sekarang Hari Rabu");
                break;
            case 4:
                System.out.println("Sekarang Hari Kamis");
                break;
            case 5:
                System.out.println("Sekarang Hari Jum'at");
                break;
            case 6:
                System.out.println("Sekarang Hari Sabtu");
                break;
            case 7:
                System.out.println("Sekarang Hari Minggu");
                break;
            default:
                System.out.println("kesalahan input, nilai harus positif dan maksimal 7");
        }
    }
}
