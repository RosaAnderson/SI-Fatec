#include "stdlib.h"
#include "stdio.h"

/**
 * Receba o salário bruto, calcule o desconto e exiba o valor do salário líquido:
 *  Bruto menor que R$ 1200       = desconto 0%
 *  Bruto entre R $1200 e R$ 3500 = desconto 9,4%
 *  Bruto maior que R$ 3500       = desconto 21,1%
 * Não permita inserção de salário negativo.
**/

int main()
    {
        // define as variaveis
        float als_vSal, als_vRend;

        // solicita o valor ao usuario
        printf("infome o valor do salario: ");

        // armazena na memoria
        scanf("%f", &als_vSal);

        // faz a verificação e aplica os descontos
        if (als_vSal >= 1200 and als_vSal <= 3500)
        {
            als_vRend = als_vSal - ((als_vSal * 9.4) / 100);
        }
        else if (als_vSal > 3500)
        {
            als_vRend = als_vSal - ((als_vSal * 21.1) / 100);
        }
        else
        {
            als_vRend = als_vSal;
        }

        // exibe o valor liquido do salario
        printf("O valor liquido do salario eh R$ %.2f", als_vRend);

        //
        return 5500;
    }
