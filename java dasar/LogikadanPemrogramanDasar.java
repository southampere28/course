/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mycourse;
public class LogikadanPemrogramanDasar {
    public static void main(String[] args){
        int a, b;
        a = 10;
        b = 15;
        if (a > b){
            a -= b;
            System.out.println("hasil pengurangan dari a - b adalah = " + a);
        }
        else if (a < b){
            a *= b;
            System.out.println("hasil perkalian dari a x b adalah = " + a);
        }
    }
}
