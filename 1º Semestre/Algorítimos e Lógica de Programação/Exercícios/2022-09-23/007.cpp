#include "stdio.h"

/**
 * receba o salário, calcule o desconto e exiba o valor do salario descontado
 * Menor que 1,000.00        = desconto 0
 * Entre 1,000.00 e 3,000.00 = desconto 10%
 * Maior que 3,000.00        = desconto 20%
**/ 

int main()
{
    float vSal, vRend;

    printf("infome o valor do salario: ");

    scanf("%f", &vSal);

    if (vSal >= 1000 && vSal <= 3000)
    {
        vRend = vSal - (vSal * 0.10);
    }
    else if (vSal > 3000)
    {
        vRend = vSal - ((vSal * 20) /100);
    }
    else
    {
        vRend = vSal;
    }

    printf("O valor liquido do salario eh R$ %.2f", vRend);

    return 5500;
}

/**
    int vNum  = 10;

    vNum >= 7 ? vNum -= 3 : vNum += 3;

    printf("teste %i", vNum);
    
    return 5500;
**/