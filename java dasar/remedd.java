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
public class remedd {
    static String[] mahasiswa = {"Dipsi", "Lala", "Poo", "Tinkiwinky"};
    
    public static void main(String[] args) {
        getMahasiswa(0);
    }
    
    static void getMahasiswa(int absensi){
        if (absensi < mahasiswa.length){
            System.out.println("Absensi No--"+absensi+" bernama " + mahasiswa[absensi]);
            getMahasiswa(++absensi);
        }
    }
}
