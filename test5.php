<?php 
class Solution {
public:
	    int Sum_Solution(int n) {
	           int ans = n;
	                   ans && (ans += Sum_Solution(n - 1));
	                           return ans;    }};

 ?>


<?php 
package siweifasan_6_5;

import java.util.Scanner;

/**
 * @Description:求1+2+3+...+n，
 * 要求不能使用乘除法、for、while、if、else、switch、case
 * 等关键字及条件判断语句（A?B:C）。
 */
public class Main01 {
    int sum=0;
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int n = sc.nextInt();
        Main01 m = new Main01();
        System.out.println(m.solution(n));
    }
    
    public int solution(int n){
        int sum=n;
        //java不能自动将0转为boolean类型，并且用短路与的时候，左边必须是变量
        boolean bool=(n!=0) && ((sum+=solution(n-1))!=0);
        return sum;
    }
}

 ?>