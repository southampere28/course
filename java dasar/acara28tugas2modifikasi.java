package mycourse;
import java.util.*;
public class acara28tugas2modifikasi {
    public static void main(String[] args) {
        int T;
        Scanner inputUser = new Scanner(System.in);
        System.out.println("Contoh IF tiga kasus");
        System.out.print("Suhu (der. C) =");
        
        T = inputUser.nextInt();
         if (T<0){
                System.out.println("Wujud air beku"+T);
            } else if ((0<=T) && (T<=100)){
                System.out.println("Wujud air cair"+T);
            } else if (T>100){
                System.out.println("Wujud air uap/gas"+T);
            }
         double H = (double)T;
         System.out.println();
         System.out.println("Celcius --> Fahrenheit");
         double Fah =((9* T)/5)+32;
         System.out.println(" " + Fah);
         System.out.println("Celcius --> Reamur");
         double Re = (4* T)/5;
         System.out.println(" " + Re);
         System.out.println("Celcius --> Fahrenheit");
         double Kel = H + 273;
         System.out.println(" " + Kel);
    }
}

