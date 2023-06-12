package mycourse;
public class tyandaktauNilaimaks {
    public static void main(String[] args) {
        int angka[][] = {
            {10, 1, 3},
            {9, 2, 6}
        };
        int large = angka[0][0];
        for (int i = 0; i < angka.length; i++) {
            for (int j = 0; j < angka[0].length; j++) {
                if (large < angka[i][j]){
                    large = angka[i][j];
                }
            }
        }
        System.out.println("large value : " + large);
    }
}
