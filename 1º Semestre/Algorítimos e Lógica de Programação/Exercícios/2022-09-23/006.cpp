#include "stdio.h"
#include "stdlib.h"

/**
 * receba o salario bruto, classifique de acordo com o IRPF 2020 e exiba
 * o salário liquido e desconto separados
/**/
int main()
{
    system("cls");

    float vRend, vLiqu, vDesc = (-1);
    float vAli, vMin, vMed, vMax;

    vMin = 7.5 / 100;
    vMed = 15.0 / 100;
    vMax = 22.5 / 100;

    printf("\n\n\nInforme o valor do salario: ");
    scanf("%f", &vRend);

    system("cls");

    printf("\n\n\nInforme o valor do salario: %.2f", vRend);

/**
    Base de Cauculo             Aliquota
    de 0,00     até 1.903,98    Isento
    de 1.903,99 até 2.826,65    7,50%   - ok
    de 2.826,66 até 3.751,05    15,00%  - ok
    de 3.751,06 até 4.664,68    22,50%  - ok
/**/
/**/
    if ((vRend > 1903.98) and (vRend <= 2826.65))
    {
        vLiqu = vRend - (vRend * vMin);
        vDesc = vRend * vMin;
        vAli = vMin * 100;
    }
/**/
    else if ((vRend > 2826.65) and (vRend < 3751.06))
    {
        vLiqu = vRend - (vRend * vMed);
        vDesc = vRend * vMed;
        vAli = vMed * 100;
    }
/**/
    else if ((vRend > 3751.05) and (vRend < 4664.69))
    {
        vLiqu = vRend - (vRend * vMax);
        vDesc = vRend * vMax;
        vAli = vMax * 100;
    }
/**/
    else if (vRend < 1903.99)
    {
        vLiqu = vRend;
        vDesc = 0;
    }
/**/

/**
    printf("\n\nvMin %f", vMin);
    printf("\n\nvMed %f", vMed);
    printf("\n\nvMax %f", vMax);
/**/

    if (vDesc < 0)
    {
        printf("\n\n\n*** ATENCAO *** \n\nSeu salario esta acima do valor maximo para calculo padrao!\nPor favor procure um contador para efetuar corretamente os calculos do IR!");
    }
    else
    {
        printf("\n\n\nO salario liquido eh R$ %.2f.", vLiqu);

        if (vDesc > 0)
        {
            printf("\n\nDo salario foi descontato R$ %.2f que corresponde a %.2f", vDesc, vAli);
        }
        else
        {
            printf("\n\nNao houve desconto!");        
        }
    }
/**/
    printf("\n\n\n\n");

    return 5500;
}
