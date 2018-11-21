<?php 
  
int BinarySearch(int A[], int X, int N)
{
  
    int Low, Mid, High;
    Low = 0; High = N - 1;
    while(Low <= High)
    {
        Mid = (Low + High) / 2;
        if(A[Mid] < X)
            Low = Mid + 1;
        else if(A[Mid] > X)
            High = Mid - 1;
        else
            return Mid; 
    }
    return -1;
}
int main()
{    
 int number[8]={12,15,24,45,51,78,84,95};   
 int size = sizeof(number)/sizeof(int);
 int a;
 scanf("%d",&a);
 int result = BinarySearch(number,a,size);
 printf("%d ",result);  
 printf("\n");
 system("pause");
 return 0;
}
 ?>