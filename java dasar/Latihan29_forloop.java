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
public class Latihan29_forloop {
    public static void main(String[] args){
        // for (inisial; kondiri; step_nilai)
        
        System.out.println("ini adalah awal program");
        
        for(int nilai = 0; nilai < 10; nilai++){
            System.out.println("for loop ke-" + nilai);
        }
        
        System.out.println("\n");
        
        int ab = 0;
        for(; ab < 10; ab++){
            System.out.println("for loop ke-" + ab);
        }
        
        for(; ab == 10;){                                                   // statement for minimal memiliki kondisi saja sama seperti while
            System.out.println("for loop ke-" + ab);
        }
        
        System.out.println("ini adalah akhir program");
    }
}
