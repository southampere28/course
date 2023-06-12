package mycourse;
public class acara25array1dimensi_2 {
    public static void main(String[] args) {
        int[] bil = new int[4];
        bil[0] = 5;
        bil[1] = 12;
        bil[2] = 7;
        bil[3] = 20;
        
        System.out.println(bil[0]);
        System.out.println(bil[1]);
        System.out.println(bil[2]);
        System.out.println(bil[3]);
        System.out.println("=========== \n");
        
        // a. percobaan 1 indeks array yang terbesar adalah index ke-3 dan terkecil adalah index ke-0
        // b. jika diubah maka akan error karna ada beberapa tipe data yang diubah menjadi float
        // c. ubah statment cetak menjadi seperti dibawah
        for (int i = 0; i < 4; i++) {
            System.out.println(bil[i]);
        }
        // maka keluaran akan sama karena loopingnya dimulai dari index ke 0 - index ke 3
    }
}


