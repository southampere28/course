package mudydev;
import java.util.Scanner;
public class FungsiProsedur {
    public static void main(String[] args) {
        Scanner masukan = new Scanner(System.in);
        System.out.println("1. Persegi\n2. Jajar Genjang \n3. Segitiga");
        System.out.print("> ");
        int pilihan = masukan.nextInt();
        switch(pilihan){
            case 1 :
                System.out.print("Masukkan sisi : ");
                int sisiPersegi = masukan.nextInt();
                persegi(sisiPersegi);
                break;
            case 2 :
                System.out.print("Masukkan alas : ");
                int alasJG = masukan.nextInt();
                System.out.print("Masukkan tinggi : ");
                int tinggiJG = masukan.nextInt();
                jajargenjang(alasJG, tinggiJG);
                break;
            case 3 :
                System.out.print("Masukkan alas : ");
                float alassegi = masukan.nextInt();
                System.out.print("Masukkan tinggi : ");
                float tinggisegi = masukan.nextInt();
                segitiga(alassegi, tinggisegi);
                break;
            default :
                System.out.println("Kesalahan Input");
        }
    }private static void persegi (int s){
        int l = s * s;
        System.out.println("Luas persegi = " + l);
    }
    private static void jajargenjang(int a, int t){
        int l = a * t;
        System.out.println("Luas jajar genjang = " + l);
    }
    private static void segitiga(float a, float t){
        float l = a / 2 * t;
        System.out.println("Luas segitiga = " + l);
    }
}
