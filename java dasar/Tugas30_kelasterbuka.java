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
public class Tugas30_kelasterbuka {
    public static void main(String[] args){
        int nilaiAwal, nilaiAkhir, total;
        Scanner inputUser = new Scanner(System.in);
        System.out.print("masukkan nilai awal = ");
        nilaiAwal = inputUser.nextInt();
        System.out.print("masukkan nilai akhir = ");
        nilaiAkhir = inputUser.nextInt();
        
        total = 0;
//        do
//        do{
//            total = total + nilaiAwal;
//            System.out.println("ditambah " + nilaiAwal + " menjadi " + total);
//            nilaiAwal++;
//        } while(nilaiAwal <= nilaiAkhir);
        
        // while
        while(nilaiAwal <= nilaiAkhir){
            total = total + nilaiAwal;
            System.out.println("ditambah " + nilaiAwal + " menjadi " + total);
            nilaiAwal++;  
        }

    }

}
