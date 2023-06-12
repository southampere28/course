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
public class Latihan27_whileloop {
    public static void main(String[] args){
        int a = 0;
        boolean kondisi = true;
        while (kondisi){
            System.out.println("while loop ke-" + a);
            a++;
            if (a == 100){
                kondisi = false;
            }
        }
        
        System.out.println("akhir dari program");
    }
}
