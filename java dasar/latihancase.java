package mudydev;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
import java.util.Scanner;
/**
 *
 * @author Pramudya
 */
public class latihancase {
    public static void main(String[] args){
        Scanner Obj = new Scanner(System.in);
        System.out.println("====== PROGRAM SWTICH CASE ====== \n");
        System.out.print("absen dulu = ");
        String nama = Obj.nextLine();
        
        // eksekusi bisa berupa satuan, string atau enum
        switch(nama){
            case "mudy":
                System.out.println(nama + " masuk");
                break; //agar memutus case case maupun default yang ada dibawah
            case "monica":
                System.out.println(nama + " masuk");
                break; //agar memutus case case maupun default yang ada dibawah    
            default:
                System.out.println(nama + " tidak masuk"); 
        }
    }
}
