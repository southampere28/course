package mycourse;
public class Acara29praktikum1 {
    static void beriSalam() {
        System.out.println("Halo! Selamat Pagi");
    }
    static void beriUcapan(String ucapan, String tes) {
        System.out.println(ucapan);
        System.out.println(tes);
    }
    public static void main(String[] args) {
        beriSalam();
        String salam = "Selamat datang di pemrograman Java";
        String entah = "entahlah";
        beriUcapan(salam, entah);
    }
}
