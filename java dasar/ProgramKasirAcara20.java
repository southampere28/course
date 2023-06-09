package mycourse;
import java.util.Scanner;
public class ProgramKasirAcara20 {
    public static void main(String[] args){
        String kartu;
        int total, diskon, bayar;
        Scanner userInput = new Scanner(System.in);
        System.out.print("apakah pelanggan memiliki kartu? (y/n) = ");
        kartu = userInput.nextLine().toLowerCase();
        System.out.print("total belanja = ");
        total = userInput.nextInt();
        
        if (kartu.equals("y")){
            if (total > 500000){
                diskon = 50000;
            }
            else{
                diskon = 25000;
            }
        } else{
            if (total > 200000){
                diskon = 10000;
            }
            else{
                diskon = 0;
            }
        }
        bayar = total - diskon;
        System.out.println("Total yang harus dibayar adalah Rp " + bayar);
    }
}
