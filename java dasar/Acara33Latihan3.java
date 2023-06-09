package mycourse;
import java.util.Scanner;
public class Acara33Latihan3 {
    static double hitungBunga(double saldo, int tahun){
        if (tahun == 0){
            return saldo;
        }else{
            return 1.11 * hitungBunga(saldo, tahun - 1);
        }
    }
    public static void main(String[] args) {
        double saldoAwal; int tahun;
        Scanner inputUser = new Scanner(System.in);
        System.out.print("Jumlah saldo awal: ");
        saldoAwal = inputUser.nextDouble();
        System.out.print("Lamanya menabung (tahun): ");
        tahun = inputUser.nextInt();
        
        System.out.print("Jumlah uang setelah " + tahun + " tahun: ");
        double hasil = hitungBunga(saldoAwal, tahun);
        System.out.printf( "%.2f", hasil);
    }
}
