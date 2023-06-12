package mycourse;

public class acara27tugas4 {
    public static void main(String[] args) {
        System.out.println("NRP\tRata-rata");
        System.out.println("---------------------------------");
        double[][] ratarata = {{81, 90, 62},{50,83,87},{89,55,65},{77,70,92}};
        double[] sum = {0, 0, 0, 0};
        int nrp = 0;
        for (int i = 0; i < ratarata.length; i++) {
            nrp++;
            for (int j = 0; j < ratarata[0].length; j++) {
                sum[i] += ratarata[i][j];
            }
            double average = sum[i] / ratarata[0].length;
            System.out.println(String.format("%d\t%.2f", nrp,average));
        }
        System.out.println("---------------------------------");
    }
}
