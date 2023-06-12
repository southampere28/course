package mudydev;
import java.util.Scanner;
public class FungsiProsedur1 {
    public static void main(String[] args) {
        Scanner masukan = new Scanner(System.in);
        System.out.println("1. Persegi\n2. Jajar Genjang \n3. Segitiga");
        System.out.print("> ");
        int pilihan = masukan.nextInt();
        switch(pilihan){
            case 1 :
                System.out.print("Masukkan sisi : ");
                int sisiPersegi = masukan.nextInt();
                System.out.println("Luas Persegi = " + persegi(sisiPersegi));
                break;
            case 2 :
                System.out.print("Masukkan alas : ");
                int alasJG = masukan.nextInt();
                System.out.print("Masukkan tinggi : ");
                int tinggiJG = masukan.nextInt();
                System.out.println("Luas jajar genjang = " + jajargenjang(alasJG, tinggiJG));
                break;
            case 3 :
                System.out.print("Masukkan alas : ");
                float alassegi = masukan.nextInt();
                System.out.print("Masukkan tinggi : ");
                float tinggisegi = masukan.nextInt();
                System.out.println("Luas segitiga = " + segitiga(alassegi, tinggisegi));
                break;
            default :
                System.out.println("Kesalahan Input");
        }
    }
        private static int persegi (int s){
        int l = s * s;
        return l;
    }
    private static int jajargenjang(int a, int t){
        int l = a * t;
        return l;
    }
    private static float segitiga(float a, float t){
        float l = a / 2 * t;
        return l;
    }
}
