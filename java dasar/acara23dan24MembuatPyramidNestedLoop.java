package mycourse;
public class acara23dan24MembuatPyramidNestedLoop {
    public static void main(String[] args) {
        for (int i = 0; i < 5; i++) {
            for (int j = 0; j < 5; j++) {
                System.out.print(" *");
            }
            System.out.println("");
        }
        System.out.println("\n\n");
    
        for (int i = 0; i < 5; i++) {
            for (int j = 0; j < 5; j++) {
                System.out.print("* ");
                if (i == j) {
                    break;
                }
            }
            System.out.println();
        }
        System.out.println("\n");
        
        for (int i = 0; i < 5; i++) {
            for (int j = 0; j < 5; j++) {
                System.out.print("* ");
                if ( (i+j) == 4) {
                    break;
                }
            }
            System.out.println();
        }
        System.out.println("\n");
        
        for (int i = 0; i < 5; i++) {
            for (int j = 0; j < 5; j++) {
                System.out.print("* ");
                if ( (i+j) == 4) {
                    break;
                }
            }
            System.out.println();
        }
        System.out.println("\n");
        
        for (int i = 0; i < 5; i++) {
            for (int j = 0; j < 5; j++) {
                System.out.print("* ");
                if ( (i+j) == 4) {
                    break;
                }
            }
            System.out.println();
        }
        
    }
        
}
