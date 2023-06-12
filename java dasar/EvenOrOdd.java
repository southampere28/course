/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mudydev;
//import java.util.*;
/**
 *
 * @author Pramudya
 */
import java.util.*;
public class EvenOrOdd {
    public static void main(String[] args){
        
//        int[] MyNumber = {1, 3, 4};

//        
//        MyNumber = Arrays.copyOf(MyNumber, MyNumber.length+1);
//        MyNumber[MyNumber.length - 1] = 7;
//        System.out.println(Arrays.toString(MyNumber));
    
        int akhirprogram;
        Scanner inputUser = new Scanner(System.in);
        System.out.print("masukkan angka terakhir = ");
        akhirprogram = inputUser.nextInt();
        int[] even = {};
        int[] odd = {};
        for(int angka = 0; angka <= akhirprogram; angka++){
            if(angka%2 == 0){
                even = Arrays.copyOf(even, even.length + 1);
                even[even.length - 1] = angka;
            }else{
                odd = Arrays.copyOf(odd, odd.length + 1);
                odd[odd.length - 1] = angka;
            }
        }
        
        System.out.println("number is even (genap)");
        System.out.println(Arrays.toString(even));
        System.out.println("number is odd (ganjil)");
        System.out.println(Arrays.toString(odd));
    }
}
