package mycourse;
public class Kuliah2_operator {
    public static void main(String[] args){
        // inisialisasi
        int h1, h2;
        int n1 = 10;
        int n2 = 15;
        boolean b1, b2, b3, b4, b5;
        System.out.println("nilai dari n1 adalah " + n1);
        System.out.println("nilai dari n2 adalah " + n2 + "\n");
        System.out.println("h1 = penjumlahan n1 dan n2, lalu dikalikan dengan penjumlahan n2 ?");
        int penjumlahan = n1 + n2;
        //soal nomor 1
        h1 = penjumlahan *= penjumlahan;
        System.out.println("hasil =  "  + h1);
        System.out.println("h2 = sisa bagi dari n1 dengan 4, kemudian dikalikan dengan n2 ?");
        h2 = (n1 % 4)*n2;
        System.out.println("hasil = "  + h2 + "\n");
        // soal nomor 2
        b1 = h1 >= h2;
        System.out.println(b1);
        b2 = h2 >= h1;
        System.out.println(b2);    
        b3 = (h1 % 4) == (++h2 % 5);
        System.out.println(b3);
        b4 = (b1 ^ b3) && (b2 || b3);
        System.out.println(b4);       
        b5 = b2 || (b3 && (b2 ^ b1));
        System.out.println(b5);
    } 
}

