#include "stdio.h"
#include "stdlib.h"
#include "string.h"

/**
 * Receba coordenadas X e Y de um ponto P (valores entre -90 e 90).
 * Classifique o ponto em um quadrante.
**/

int main()
{
    int vI, vX, vY;
    char vMensagem[100];
/**/
    for (vI = 500; vI < -90 || vI > 90; vI == vX)
    {
        system("cls");
        printf("\n\n\nInforme o valor de X: ");
        scanf("%d", &vX);

        vI = vX;

        if (vX <-90 or vX > 90)
        {
/**/
            if (vX < -90)
            {
                strcpy(vMensagem, "O valor de X eh menor que o permitido!");
//                printf("\nO valor de X eh menor que o permitido!\n\n");
            }
            else
            {
                strcpy(vMensagem, "O valor de X eh maior que o permitido!");
//                printf("\nO valor de X eh maior que o permitido!\n\n");
            }
/**/
            printf("\n%c\n\n", vMensagem);

            system("pause");
        }
    }

    for (vI = 500; vI < -90 || vI > 90; vI == vY)
    {
        system("cls");
        printf("\n\n\nInforme o valor de Y: ");
        scanf("%d", &vY);

        vI = vY;

        if (vY <-90 or vY > 90)
        {
/**/
            if (vY < -90)
            {
//                vMensagem = 'O valor de X eh menor que o permitido!';
                printf("\nO valor de Y eh menor que o permitido!\n\n");
            }
            else
            {
//                vMensagem = 'O valor de X eh maior que o permitido!';
                printf("\nO valor de Y eh maior que o permitido!\n\n");
            }
/**/
//            printf("\n%c\n\n", vMensagem);

            system("pause");
        }
    }
/**/
    system("cls");

    printf("\n\n\n");

    if (vX > 0 and vY > 0)
    {
        printf("O ponto P esta no quadrante A!");
    }
    else if (vX < 0 and vY > 0)
    {
        printf("O ponto P esta no quadrante B!");
    }
    else if (vX < 0 and vY < 0)
    {
        printf("O ponto P esta no quadrante C!");
    }
    else if (vX > 0 and vY < 0)
    {
        printf("O ponto P esta no quadrante D!");
    }
    else if (vX == 0 and vY != 0)
    {
        printf("O ponto P esta sobre o eixo X!");
    }
    else if (vX != 0 and vY == 0)
    {
        printf("O ponto P esta sobre o eixo Y!");
    }
    else
    {
        printf("O ponto P esta na Origem!");
    }

    printf("\n\n");
    printf("                   ");
    printf("(y)", 179);
    printf("\n                    ");
    printf("%c", 179);
    printf("\n                B   ");
    printf("%c", 179);
    printf("   A\n                    ");
    printf("%c", 179);

    printf("\n            ");
    printf("%c", 196);
    printf("%c", 196);
    printf("%c", 196);
    printf("%c", 196);
    printf("%c", 196);
    printf("%c", 196);
    printf("%c", 196);
    printf("%c", 196);

    printf("%c", 197);

    printf("%c", 196);
    printf("%c", 196);
    printf("%c", 196);
    printf("%c", 196);
    printf("%c", 196);
    printf("%c", 196);
    printf("%c", 196);
    printf("%c(x)", 196);

    printf("\n");

    printf("                    ");
    printf("%c", 179);
    printf("\n                C   ");
    printf("%c", 179);
    printf("   D\n                    ");
    printf("%c", 179);

    printf("\n\n\n");

    //system("pause");

    return 5500;
}