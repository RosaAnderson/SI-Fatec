#include "stdio.h"

int main()
{
    int vNum;
    char vResp = 'y';

    printf("\n\n\nInforme um numero: ");

    scanf("%i", &vNum);

while (vResp == 'y')
{
    /* code */
//    if (vNum % 2 == 0) // verifica se é par
    if (vNum >= 0)
    {
        if (vNum == 0)
        {
            printf("\n\no numero %1 eh neutro\n\n");
        }
        else
        {
            if (vNum % 2 == 0)
            {
                printf("\n\nO numero %i eh positivo e eh Par\n\n", vNum);
            }
            else
            {
                printf("\n\nO numero %i eh positivo e eh Impar\n\n", vNum);
            }
            if (vNum % 2 == 0)
            {
                printf("\n\nO numero %i eh negativo e eh Par\n\n", vNum);
            }
            else
            {
                printf("\n\nO numero %i eh negativo e eh Impar\n\n", vNum);
            }
        }
    }
    printf("Deseja testar outro? (y/n): ");
    scanf("%c", &vResp);
}

    return 5500;
}
