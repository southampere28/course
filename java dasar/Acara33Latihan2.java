package mycourse;
import java.util.Scanner;
public class Acara33Latihan2 {
    static int hitungPangkat(int x, int y){
        if (y == 0){
            return 1;
        }else{
            return x * hitungPangkat(x, y - 1);
        }
    }
    
    public static void main(String[] args) {
        int bilangan, pangkat;
        Scanner inputUser = new Scanner(System.in);
        System.out.print("Bilangan yang dihitung: ");
        bilangan = inputUser.nextInt();
        System.out.print("Pangkat: ");
        pangkat = inputUser.nextInt();
        
        System.out.println(hitungPangkat(bilangan, pangkat));
    }
}
