package mycourse;
public class acara25array1dimensi_1 {
    public static void main(String[] args) {
        int[] angka = {5, 10, 17, 20, 1};
        String[] teks = {"saya", "sedang", "belajar", "OOP", "Java"};
        
        for (int i = 0; i < angka.length; i++) {
            System.out.println(angka[i]);
        }
        
        for (int j = 0; j < teks.length; j++) {
            System.out.print(teks[j]);
            System.out.print(" ");
        }
    }
}

