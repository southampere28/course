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
public class Latihan30_loopingsederhana {
    public static void main(String[] args){
        
        int nilai_awal, nilai_akhir, total;
        Scanner inputUser = new Scanner(System.in);
        System.out.print("masukkan nilai awal = ");
        nilai_awal = inputUser.nextInt();
        System.out.print("masukkan nilai akhir = ");
        nilai_akhir = inputUser.nextInt();
        
        total = 0;
//        System.out.print(total + " ");
        while(nilai_awal <= nilai_akhir){
            total = total + nilai_awal;
//            System.out.println("ditambah " + nilai_awal + " menjadi " + total);
            nilai_awal++;
        }
        System.out.println(total);
    }
}
