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
public class Latihan24_ternaryop {
    public static void main(String[] args){
        
        // ternary operator
        
        int input, x;
        
        Scanner inputUser = new Scanner(System.in);
        System.out.print("masukkan nilai : ");
        input = inputUser.nextInt();
        System.out.println(input);
 
        // variabel x =ekspresi ? statement_true : statement_false
        x = (input == 10) ? (input*input) : (input/2);
        /* jika memakai if else akan panjang contoh
        
            if (input == 10){
                x = input * input
            }
            else{
                x = input / 2
            }
        */
        System.out.println("hasilnya " + x);
    }
}
