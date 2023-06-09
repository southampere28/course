package mycourse;
public class Acara35Latihan2 {
    static boolean isPalindrom(String str) {
        return isPalindromRecc(0, str.length() - 1, str);
    }
    static boolean isPalindromRecc(int first, int last, String str) {
        if (first >= last) {
            return true;
        }
        char firstChar = str.charAt(first);
        char lastChar = str.charAt(last);       
        if(first < str.length()){
            if(firstChar != lastChar){
                return false;
            }
            else{
                ++first;
                --last;
                return isPalindromRecc(first, last, str);
            }
        }
        else{
            return true;
        }
    }
    
    static String changeXY (String str){
        if(str.length() == 0){
            return str;
        }
        if(str.charAt(0) == 'x'){
            return 'y' + changeXY(str.substring(1));
        }
        return str.charAt(0) + changeXY(str.substring(1));
    }
    
    public static void main(String[] args) {
        System.out.println(isPalindrom("KATAK"));
        System.out.println(changeXY("docodex"));
        System.out.println(changeXY("xyxy"));
    }
}
