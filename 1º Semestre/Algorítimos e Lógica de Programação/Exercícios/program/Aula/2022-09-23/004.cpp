#include "stdio.h"

/**
 * Calcule o IMC de uma pessoa e classifique-a (5 categorias)
**/

int main()
{
    float vIMC, vPeso, vAltura;

    printf("informe a altura o individuo em cm: ");

    scanf("%f", &vAltura);

    printf("informe o peso do individuo em kg: ");

    scanf("%f", &vPeso);
    
    vAltura = vAltura / 100;

    vIMC = (vPeso / (vAltura * vAltura));

    if (vIMC < 17)
    {
        printf("O IMC eh %.2f e esta muito abaixo do indicado!", vIMC);
    }
    else if (vIMC > 17 and vIMC < 21)
    {
        printf("O IMC eh %.2f e esta abaixo do indicado!", vIMC);
    }
    else if (vIMC > 21 and vIMC < 25)
    {
        printf("O IMC eh %.2f e esta dentro do indicado!", vIMC);
    }
    else if (vIMC > 25 and vIMC < 29)
    {
        printf("O IMC eh %.2f e esta acima do indicado!", vIMC);
    }
    else
    {
        printf("O IMC eh %.2f e esta muito acima do indicado!", vIMC);
    }


//    printf("imc %.2f", vIMC);


    return 5500;
}
