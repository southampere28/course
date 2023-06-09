/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mudydev;

/**
 *
 * @author Pramudya
 */
import java.util.Scanner;
public class test {

    /**
     * @param args the command line arguments
     */
//    static void tampilDeret(int x){
//        if (x > 0){
//            System.out.print(x + " ");
//            tampilDeret(x - 1);
//        } else{
//            System.out.println();
//        }
//    }
//    public static void main(String[] args) {
//          tampilDeret(5);
//    }    
    
    static int angkaBebas(int x){
        x += 1;
        return x;
    }
    
    private static void ucapkanSalam(){
        System.out.println("assalamu'alaikum");
    }
    
    static void ucapkanKalimat(String kal){
        System.out.println(kal);
    }
    
    void mokad(){
        System.out.println("kau mokad yak haha");
        System.out.println("ah yang bener");
    }
    
    int tambahinmeg(int angka1, int angka2){
//        int hasilnye = ;
        return(angka1 + angka2);
    }
    
    public static void main(String[] args) {
//        Scanner inputin = new Scanner(System.in);
//        System.out.print("masukkan angka bebas > ");
//        int h = inputin.nextInt();
//        
//        System.out.println(angkaBebas(h));
        ucapkanSalam();
        ucapkanKalimat("entahlah");
        
        Scanner inputUser = new Scanner(System.in);
        test saya = new test();
        saya.mokad();
        
        System.out.print("\n=========program penjumlahan wkwkwk===========\n");
        System.out.print("masukin angka pertama => ");
        int angka1 = inputUser.nextInt();
        System.out.print("masukin angka kedua => ");
        int angka2 = inputUser.nextInt();
        
//        test juml = new test();
        System.out.println(saya.tambahinmeg(angka1, angka2));
    }
}
