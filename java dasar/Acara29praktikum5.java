package mycourse;
public class Acara29praktikum5 {
    static void tampil(String pesan, int... angka){
        System.out.println("String: " + pesan);
        System.out.println("Jumlah argumen/parameter: " + angka.length);
        
        for (int i = 0; i < angka.length; i++) {
            System.out.println(angka[i] + " ");
        }
        System.out.println();
    }
    
    public static void main(String[] args) {
        tampil("Daspro 2019", 100, 200);
        tampil("Daspro 2019", 1, 2, 3, 4, 5);
        tampil("Polinema");
        int[] angka = {1, 2, 3, 4};
        tampil("Malang", angka);
    }
}
