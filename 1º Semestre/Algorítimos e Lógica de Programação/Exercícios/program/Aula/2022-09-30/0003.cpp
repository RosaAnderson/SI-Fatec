#include "stdio.h"
#include "stdlib.h"

/**
 * Calcule e exiba a média dos n valores enquanto o usuário digitar “1”
**/

int main()
{
    int vQtd = 0 , vResp;
    float vNota = 0, vMedia = 0;

    do
    {
        system("cls");
        printf("Informe a nota do aluno: ");
        scanf("%f", &vNota);

        vMedia = vMedia + vNota;
        vQtd++;

        printf("Digite 1 para continuar e 0 sair! ");
        scanf("%i", &vResp);

    } 
    while (vResp == 1);

    vMedia = vMedia / vQtd;

    printf("A media das notas dos alunos eh: %.2f\n\n\n", vMedia);

    return 5500;
}

