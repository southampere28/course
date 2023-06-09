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
import java.util.*;
public class Latihan25_calculator {
    public static void main(String[] args){
        Scanner inputUser;
        float a, b, hasil;
        char operator;
        inputUser = new Scanner(System.in);
        
        
        System.out.print("nilai a = ");
        a = inputUser.nextFloat();
        System.out.print("nilai operator = ");
        operator = inputUser.next().charAt(0);
        System.out.print("nilai b = ");
        b = inputUser.nextFloat();
        
        System.out.println("Input User =  " + a + " " + operator + " " + b);
        
        // operator
        switch (operator) {
            case '+':           // penjumlahan
                hasil = a + b;
                System.out.println("hasil = " + hasil);
                break;
                
            case '-':           // pengurangan
                hasil = a - b;
                System.out.println("hasil = " + hasil);
                break;
                
            case '*':           // perkalian
                hasil = a * b;
                System.out.println("hasil = " + hasil);
                break;
                
            case '/':           // pembagian
                if (b == 0){
                    System.out.println("pembagi nol menghasilkan nilai tak hingga");
                }
                else{
                hasil = a / b;
                System.out.println("hasil = " + hasil);
                }
                break;
                
            default:            // else
                System.out.println("operator salah");
                break;
        }
        
    }
}
