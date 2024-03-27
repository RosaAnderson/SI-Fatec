#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

/*
    Criar uma matriz Identidade de lado L.
    Usuário define L e X.
    Exibir a matriz.
    
    Alterar os valores 1 da diagonal principal por X.
    Exibir a matriz.
*/

int main()
{
    // define a linguagem
    setlocale(LC_ALL, "Portuguese");

    // declaração das variaveis
    int vI_als, vJ_als, vX_als, vLad_als;

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
            printf("\nInforme outro número, a matriz não pode ser %d x %d!", vLad_als, vLad_als);

            // muda de linha
            printf("\n\n");

            //espera a leitura e ação do usuario
            system("pause");
        }
    } while (vLad_als < 2); // não permite que matriz menor que 2 x 2

    // cria a matriz com tamanho N x M
    int vMat_als[vLad_als][vLad_als];

    // exibe uma mensagem previa
    printf("\n\nInforme um número inteiro: ");
    scanf("%d", &vX_als);

    // faz um laço para montar a tabela a partir da matriz
    // este 'for' representa as linhas
    for (vI_als = 0; vI_als < vLad_als; vI_als++)
    {
        // faz um laço para montar a tabela a partir da matriz
        // este 'for' representa as colunas
        for (vJ_als = 0; vJ_als < vLad_als; vJ_als++)
        {
            // insere o valor na celula
            vMat_als[vI_als][vJ_als] = 0;

            // verifica e a posição pertence a diagonal principal
            if (vI_als == vJ_als)
            {
                vMat_als[vI_als][vJ_als] = 1;
            }
        }
    }

    // faz um laço para montar a tabela a partir da matriz
    // este 'for' representa as linhas
    for (vI_als = 0; vI_als < vLad_als; vI_als++)
    {
        // faz um laço para montar a tabela a partir da matriz
        // este 'for' representa as colunas
        for (vJ_als = 0; vJ_als < vLad_als; vJ_als++)
        {
            // insere o valor da celula formatando para 2 casas depois da virgua
            printf("%d\t", vMat_als[vI_als][vJ_als]);
        }
        // muda de linha
        printf("\n");
    }

    // muda de linha
    printf("\n\n");

    // faz um laço para montar a tabela a partir da matriz
    // este 'for' representa as linhas
    for (vI_als = 0; vI_als < vLad_als; vI_als++)
    {
        // faz um laço para montar a tabela a partir da matriz
        // este 'for' representa as colunas
        for (vJ_als = 0; vJ_als < vLad_als; vJ_als++)
        {
            // verifica se a posição pertence a diagonal principal
            if (vI_als == vJ_als)
            {
                // insere o novo valor na posição
                vMat_als[vI_als][vJ_als] = vX_als;
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
            printf("%d\t", vMat_als[vI_als][vJ_als]);
        }
        // muda de linha
        printf("\n");
    }

    // muda de linha
    printf("\n\n");

    // finaliza
    return 5500;
}
