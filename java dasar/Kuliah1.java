/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mycourse;
import java.util.Scanner;
/**
 *
 * @author Pramudya
 */
public class Kuliah1 {
    public static void main(String[] args){
        Scanner Inputin = new Scanner(System.in);
        System.out.print("masukkan nama anda : ");
        String nama = Inputin.nextLine();
        System.out.println("nama anda adalah " + nama);
    }
}
