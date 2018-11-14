<?php 
 public class Solution {
 public int Add(int num1,int num2) {
         while(num2!=0){
            int temp = num1^num2;
                 num2 = (num1 & num2)<<1;
                 num1=temp;        
  		 }
            return num1;
     }
 }

 ?>
 <?php 
 class Solution{
public:
    int Add(int x, int y){
        int sum;
        int carry;

        while (true){
            sum = x^y;
            carry = (x&y) << 1;
            y = carry;
            x = sum;
            if (y == 0){
                break;
            }
        }
        return sum;
    }
};
 ?>