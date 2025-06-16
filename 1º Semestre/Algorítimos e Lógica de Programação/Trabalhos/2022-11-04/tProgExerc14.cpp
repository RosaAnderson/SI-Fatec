#include "stdlib.h"
#include "stdio.h"

/**
 * Receba 3 números e indique o maior deles. Não permita inserção de 3 números iguais.
**/

int main()
    {
        int als_vN1, als_vN2, als_vN3, als_vResult = 0;

        system("cls");
        printf("\n\n\nInforme o primeiro numero: ");
        scanf("%d", &als_vN1);

        do
        {
            system("cls");
            printf("\n\n\nInforme o segundo numero: ");
            scanf("%d", &als_vN2);

            if (als_vN2 == als_vN1)
            {
                printf("\nO numero informado nao pose ser igual ao informado anteriormente!");
                system("pause");
            }
        } while (als_vN2 == als_vN1);

        do
        {
            system("cls");
            printf("\n\n\nInforme o terceiro numero: ");
            scanf("%d", &als_vN3);

            if ((als_vN3 == als_vN2) or (als_vN3 == als_vN1))
            {
                printf("\nO numero informado nao pose ser igual aos informados anteriormente!");
                system("pause");
            }
        } while ((als_vN3 == als_vN2) or (als_vN3 == als_vN1));

        if ((als_vN1 > als_vN2) and (als_vN1 > als_vN3))
        {
            als_vResult = als_vN1;
        }
        else if ((als_vN2 > als_vN1) and (als_vN2 > als_vN3))
        {
            als_vResult = als_vN2;
        }
        else if ((als_vN3 > als_vN1) and (als_vN3 > als_vN2))
        {
            als_vResult = als_vN3;
        }

        printf("\n\n\nO numero %i eh o maior dos tres informados!\n\n\n", als_vResult);

        system("pause");

        return 5500;
    }