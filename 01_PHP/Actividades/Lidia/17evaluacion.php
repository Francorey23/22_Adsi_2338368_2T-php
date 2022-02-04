<?php

#include
#include
 
#include
#include
 
void main(){
//Declaracion de variables
int _num1,_num2,_opc,_sum,_res,_mul;
float _div;
//inicializo la variable en uno, para poderla comparar
//con el cilo while que esta en la linea que sigue.
_opc=1;
while(_opc!=5){
clrscr();
printf("1- Suman");
printf("2- Restan");
printf("3- Multiplicacionn");
printf("4- Divisionn");
printf("5- SALIRn");
printf("Opcion: ");scanf("%d",&_opc);
switch(_opc){
case 1 :
clrscr();
printf("Valor 1:");scanf("%d",&_num1);
printf("Valor 2:");scanf("%d",&_num2);
_sum=_num1+_num2;
printf("%d + %d = %d",_num1,_num2,_sum);
getche();
break;
 
case 2 :
clrscr();
printf("Valor 1:");scanf("%d",&_num1);
printf("Valor 2:");scanf("%d",&_num2);
_res=_num1-_num2;
printf("%d - %d = %d",_num1,_num2,_res);
getche();
break;
 
case 3 :
clrscr();
printf("Valor 1:");scanf("%d",&_num1);
printf("Valor 2:");scanf("%d",&_num2);
_mul=_num1*_num2;
printf("%d x %d = %d",_num1,_num2,_mul);
getche();
break;
 
case 4 :
float r;
clrscr();
printf("Valor 1:");scanf("%d",&_num1);
printf("Valor 2:");scanf("%d",&_num2);
if(_num2==0){
printf("ERROR: %d / %d = No existe.",_num1,_num2);
}else{
_div=(float)_num1/_num2;
printf("%d / %d = %.2f",_num1,_num2,_div);
}
getche();
break;
 
 
}//END switch
}//END while
}//END main
    //Declaracion de variables
    int _num1,_num2,_opc,_sum,_res,_mul;
    float _div;
    //inicializo la variable en uno, para poderla comparar
    //con el cilo while que esta en la linea que sigue.
    _opc=1;
    while(_opc!=5){
    clrscr();
    printf("1- Suman");
    printf("2- Restan");
    printf("3- Multiplicacionn");
    printf("4- Divisionn");
    printf("5- SALIRn");
    printf("Opcion: ");scanf("%d",&_opc);
    switch(_opc){
    case 1 :
    clrscr();
    printf("Valor 1:");scanf("%d",&_num1);
    printf("Valor 2:");scanf("%d",&_num2);
    _sum=_num1+_num2;
    printf("%d + %d = %d",_num1,_num2,_sum);
    getche();
    break;
     
    case 2 :
    clrscr();
    printf("Valor 1:");scanf("%d",&_num1);
    printf("Valor 2:");scanf("%d",&_num2);
    _res=_num1-_num2;
    printf("%d - %d = %d",_num1,_num2,_res);
    getche();
    break;
     
    case 3 :
    clrscr();
    printf("Valor 1:");scanf("%d",&_num1);
    printf("Valor 2:");scanf("%d",&_num2);
    _mul=_num1*_num2;
    printf("%d x %d = %d",_num1,_num2,_mul);
    getche();
    break;
     
    case 4 :
    float r;
    clrscr();
    printf("Valor 1:");scanf("%d",&_num1);
    printf("Valor 2:");scanf("%d",&_num2);
    if(_num2==0){
    printf("ERROR: %d / %d = No existe.",_num1,_num2);
    }else{
    _div=(float)_num1/_num2;
    printf("%d / %d = %.2f",_num1,_num2,_div);
    }
    getche();
    break;
     
     
    }//END switch
    }//END while
    }//END main
