package mycourse;
public class acara26array2dimensi_2 {
    public static void main(String[] args) {
        
        // a. penambahan array column dari [2][3] menjadi [2][4]
        // hasilnya array akan tetap ditambah teatapi tidak akan dicetak
        int [][] nilai = new int [2][4];
        nilai[0][0] = 12;
        nilai[0][1] = 14;
        nilai[0][2] = 34;
        nilai[0][3] = 10;
        nilai[1][0] = 30;
        nilai[1][1] = 21;
        nilai[1][2] = 67;
        nilai[1][3] = 42;
        
        //b. mengubah  kode 
        // hasilnya semua value dari array akan di tampilkan karena range nya sesuai dengan
        // panjang array
        for (int i = 0; i < nilai.length; i++) {
            for (int j = 0; j < nilai[0].length; j++) {    // nilai[0] maksudnya panjang column pada row ke 0
                System.out.print(nilai[i][j] + " ");
            }
            System.out.println(" ");
        }
        System.out.println("");
        
        // c. mengubah kode menjadi seperti berikut
        // hasilnya sama yaitu menampilkan seluruh value yang terdapat pada array
        for (int array1D[] : nilai) {
            for (int j : array1D) {
                System.out.print(j + " ");
            }
            System.out.println(" ");
        }
    }
}

