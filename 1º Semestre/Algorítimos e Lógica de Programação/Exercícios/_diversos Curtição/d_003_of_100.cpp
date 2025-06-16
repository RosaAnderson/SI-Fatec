#include "stdio.h"
#include "stdlib.h"
#include "locale.h"
#include "time.h"
#include "string.h"

/**
 * Crie um programa que leia o nome e o salário de um funcionário, mostrando no final uma mensagem.
 *  Ex:
 *     Nome do Funcionário: Maria do Carmo
 *     Salário: 1850,45
 *     O funcionário Maria do Carmo tem um salário de R$1850,45 em Junho.
/**/

int main()
{
/**/
    time_t mytime;
    mytime = time(NULL);
    struct tm tm = *localtime(&mytime);

    char vNome[51], vMes[11], vMon;
    float vRend;

    vMon = ("%d", tm.tm_mon + 1);

    if (vMon == 1)
    {
        strcpy(vMes, "Janeiro");
    }
    else if (vMon == 2)
    {
        strcpy(vMes, "Fevereiro");
    }
    else if (vMon == 3)
    {
        strcpy(vMes, "Marco");
    }
    else if (vMon == 4)
    {
        strcpy(vMes, "Abril");
    }
    else if (vMon == 5)
    {
        strcpy(vMes, "Maio");
    }
    else if (vMon == 6)
    {
        strcpy(vMes, "Junho");
    }
    else if (vMon == 7)
    {
        strcpy(vMes, "Julho");
    }
    else if (vMon == 8)
    {
        strcpy(vMes, "Agosto");
    }
    else if (vMon == 9)
    {
        strcpy(vMes, "Setembro");
    }
    else if (vMon == 10)
    {
        strcpy(vMes, "Outubro");
    }
    else if (vMon == 11)
    {
        strcpy(vMes, "Novembro");
    }
    else
    {
        strcpy(vMes, "Dezembro");
    }

    printf("\n\n\nInforme o nome do funcionario: ");

    gets(vNome);

    printf("\nInforme os rendimentos do funcionario: ");

    scanf("%f", &vRend);

    printf("\n\nNome do Funcionario: %s.\n", vNome);
    printf("Salario: R$ %.2f.\n", vRend);
    printf("O funcionario %s tem um salario de R$%.2f em %s.\n\n\n", vNome, vRend, vMes);

    system("pause");

    return 5500;
}