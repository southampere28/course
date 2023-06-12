/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mudydev;
import java.util.Scanner;
/**
 *
 * @author Pramudya
 */
public class LatihanIfElse {
    public String atilah = "minuman";
    public static void main(String[] args){
        Scanner objct = new Scanner (System.in);
        System.out.println("======= PROGRAM IF ELSE STATEMENT =======");
        System.out.println("");
        System.out.print("masukkan number = ");
        int num = objct.nextInt();
        
        if (num == 5){
            System.out.println("num = 5");
            System.out.println("nilai anda benar \n");
        }
        else {
            System.out.println("bukan 5");
            System.out.println("nilai anda salah \n");
        }
        System.out.println("=========================================");
    }
}
