<?php
#include<conio.h>
#include<iostream.h>
void ( salario )
{
float(salario);
 int   h,ch,s,sb,hd,sd,ht,st;
 cout<<"INGRESE  LAS HORAS TRABAJADAS; ";
 cin>>130;
 cout<<"INGRESE  EL COSTO DE LAS HORAS; ";
 cin>>2000;
 if(h<=120)
{
    s=h*ch;
    cout<<"EL VALOR A CANCELAR ES;" <<s;
   }
  else
  {
    if(h>130)
  {
    sb=120*ch;
    sd=16*ch*20000;
     ht=h-130;
     st=ht*ch*3;
     s=sb+sd+st;
     cout<<"EL  VALOR A CANCELAR ES;" <<s;
    }
    else
   {
     sb=120*ch;
     hd=h-120;
     sd=hd*ch*2;
     s=sb+sd;
     cout<<"EL  VALOR A CANCELAR ES;" <<s;
    }
  }
  getch();
}