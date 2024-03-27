#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

/*
    Criar programa que crie uma matriz quadrada matx de lado A e seja preenchida com B+(C+i+j).
    Exibir matx.
    Exibir a soma dos elementos da diagonal principal.
    A, B e C são parâmetros de entrada definidos pelo usuário.
*/

int main()
{
    // define a linguagem
    setlocale(LC_ALL, "Portuguese");

    // declaração das variaveis
    int   vI_als, vJ_als, vLad_als;
    float vB_als, vC_als, vS_als = 0;

    // valida a entrada para a matriz
    do
    {
        // limpa a tela
        system("cls");

        // solicita ao usuario as entradas para definir o tamanho da matriz
        printf("Informe quanto a matriz terá de lado: ");
        scanf("%d", &vLad_als);

        if (vLad_als < 2)
        {
            // mensagem de aviso ao usuario
            printf("\nInforme outro numero, a matriz não pode ser %d x %d!", vLad_als, vLad_als);

            // muda de linha
            printf("\n\n");

            //espera a leitura e ação do usuario
            system("pause");
        }
    } while (vLad_als < 2); // não permite que matriz menor que 2 x 2

    // cria a matriz com tamanho N x M
    float vMat_als[vLad_als][vLad_als];

    // exibe uma mensagem previa
    printf("\n\nDefina dois valores para calcular valores internos.\n\n");
    
    // solicita ao usuario os valores para preenchimento da matriz  X e Y
    printf("\tInforme o primeiro valor: ");
    scanf("%f", &vB_als);
    printf("\tInforme o segundo valor: ");
    scanf("%f", &vC_als);

    // faz um laço para montar a tabela a partir da matriz
    // este 'for' representa as linhas
    for (vI_als = 0; vI_als < vLad_als; vI_als++)
    {
        // faz um laço para montar a tabela a partir da matriz
        // este 'for' representa as colunas
        for (vJ_als = 0; vJ_als < vLad_als; vJ_als++)
        {
            // insere o valor na celula
            vMat_als[vI_als][vJ_als] = vB_als + vC_als + vI_als + vJ_als;

            // verifica e a posição pertence a diagonal principal
            if (vI_als == vJ_als)
            {
                // faz a soma
                vS_als = vS_als + vMat_als[vI_als][vJ_als];
            }
        }
    }

    // muda de linha
    printf("\n");

    // faz um laço para montar a tabela a partir da matriz
    // este 'for' representa as linhas
    for (vI_als = 0; vI_als < vLad_als; vI_als++)
    {
        // faz um laço para montar a tabela a partir da matriz
        // este 'for' representa as colunas
        for (vJ_als = 0; vJ_als < vLad_als; vJ_als++)
        {
            // insere o valor da celula formatando para 2 casas depois da virgua
            printf("%.2f\t", vMat_als[vI_als][vJ_als]);
        }
        // muda de linha
        printf("\n");
    }

    // mostra a celula escolhida
    printf("\n\nA soma da diagonal principal é: %.2f", vS_als);

    // muda de linha
    printf("\n\n");

    // finaliza
    return 5500;
}
