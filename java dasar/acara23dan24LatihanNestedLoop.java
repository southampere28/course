package mycourse;
public class acara23dan24LatihanNestedLoop {
    public static void main(String[] args) {
        for (int i = 0; i <= 12; i++){
            
            for (int j = 12; j >= i; j--){
                System.out.print(" ");
            }
            for (int k = 0; k <= i; k++) {
                System.out.print("* ");
            }
            System.out.println();
        }
    }
}

