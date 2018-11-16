<?php 

void findFirstCharInStr(char *str){
    if(str==NULL||str==""){//先验证字符串是否有效 
        return;
    }

    int i=0;
    int len=0;
    while(str[i]!='\0'){
        if(!('A'<=str[i]&&str[i]<='Z')){//检查字符串是不是全部由大写字符构成 
            return;
        }
        len++;
        i++; 
    }
    //count[26]:用来保存26个大写字母在字符串中出现的次数,并先初始化为零
    int count[26];

    for(int i=0;i<26;i++){
        count[i]=0;
    }
    //将整个字符串中出现的字符的次数进行统计 
    for(int i=0;i<len;i++){
        count[str[i]-'A'] ++;
    } 
    //找到第一个出现一次的字符的下标 
    for(int j=0;j<len;j++){

        if(count[str[j]-'A']==1){//若找到，则输出下标，并返回
            printf("%d\n",j);
            return;
        }
    }
    printf("-1\n");//若没有找到，则输出：-1
}
int main(void){
    char str[10000];
    gets(str);
    while(1){
        findFirstCharInStr(str);
        gets(str);
    }
    return 0;
} 

 ?>