#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

/*
    Dada a matriz matF={{1,6,5,4,8},{2,8,4,6,3},{7,1,4,5,0},{1,6,4,9,3},{8,3,7,4,0}}.
    Calcule individualmente a média dos elementos:
       do triângulo superior
       da diagonal principal
       do triângulo inferior
    Exiba:
       a matriz
       as três médias
       indique qual a maior das 3 somas.
*/

int main()
{
    // define a linguagem
    setlocale(LC_ALL, "Portuguese");

    // limpa a tela
    system("cls");

    // declaração das variaveis
    int   vI_als, vJ_als, vSoma_als;
    float vMts_als, vMti_als, vMdp_als;
    int   vSts_als = 0, vSti_als = 0, vSdp_als = 0;
    int   vMat_als[5][5] = {{1,6,5,4,8},{2,8,4,6,3},{7,1,4,5,0},{1,6,4,9,3},{8,3,7,4,0}};

    // muda de linha
    printf("\n");
    
    // exibe o texto
    printf("Matriz proposta\n\n");

    // faz um laço para montar a tabela a partir da matriz
    // este 'for' representa as linhas
    for (vI_als = 0; vI_als < 5; vI_als++)
    {
        // faz um laço para montar a tabela a partir da matriz
        // este 'for' representa as colunas
        for (vJ_als = 0; vJ_als < 5; vJ_als++)
        {
            // insere o valor da celula formatando para 2 casas depois da virgua
            printf("%d\t", vMat_als[vI_als][vJ_als]);

            // valida o triangulo superior
            if (vI_als < vJ_als)
            {
                // faz a soma do triangulo
                 vSts_als = vSts_als + vMat_als[vI_als][vJ_als];
            }

            // valida a diagonal principal
            if (vI_als == vJ_als)
            {
                // faz a soma da diagonal
                 vSdp_als = vSdp_als + vMat_als[vI_als][vJ_als];
            }

            // valida o triangulo inferior
            if (vI_als > vJ_als)
            {
                // faz a soma do triangulo
                 vSti_als = vSti_als + vMat_als[vI_als][vJ_als];
            }
        }
        // muda de linha
        printf("\n");
    }

    // compara as somas e salva na variavel a maior delas
    if ((vSts_als > vSdp_als) and (vSts_als > vSti_als))
    {
        vSoma_als = vSts_als;
    }
    else if ((vSdp_als > vSts_als) and (vSdp_als > vSti_als))
    {
        vSoma_als = vSdp_als;
    }
    else if ((vSti_als > vSts_als) and (vSti_als > vSdp_als))
    {
        vSoma_als = vSti_als;
    }

    // calculas a média
    vMts_als = float(vSts_als) / 10;
    vMdp_als = float(vSdp_als) / 5;
    vMti_als = float(vSti_als) / 10;

    // muda de linha
    printf("\n");

    // exibe as médias
    printf("A média do triângulo superior é: %.2f\n", vMts_als);
    printf("A média da diagonal principal é: %.2f\n", vMdp_als);
    printf("A média do triângulo inferior é: %.2f\n", vMti_als);

    // muda de linha
    printf("\n");

    // exibe a maior soma
    printf("A maior soma é: %d\n", vSoma_als);

    // muda de linha
    printf("\n\n");

    // finaliza
    return 5500;
}
