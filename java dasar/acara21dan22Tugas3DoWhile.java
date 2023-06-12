package mycourse;
import java.util.Scanner;
public class acara21dan22Tugas3DoWhile {
    public static void main(String[] args) {
        int angka, b;
        Scanner userInput = new Scanner(System.in);
        System.out.println("====== PROGRAM LOOP DENGAN BREAK ======");
        b = 0;
        do {            
            System.out.print("Masukkan bilangan : ");
            angka = userInput.nextInt();
            b += angka;
            if (b > 50) break;
        } while (true);
        System.out.printf("angka berhenti pada angka :  %d \n", b);
    }
}

