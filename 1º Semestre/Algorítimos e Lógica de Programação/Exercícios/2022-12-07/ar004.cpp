#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

/*
    Criar uma matriz N x M e preencher com (1-(i+Y)*(j*X)).
    Usuário define X e Y.
    Exibir a matriz.
    Pesquisar uma posição da matriz pelos seus índices e exibir o valor contido nela.
*/

int main()
{
    // define a linguagem
    setlocale(LC_ALL, "Portuguese");

    // declaração das variaveis
    int   vI_als, vJ_als, vLin_als, vCol_als;
    float vX_als, vY_als;

    // limpa a tela
    system("cls");

    // valida a entrada para a matriz
    do
    {
        // limpa a tela
        system("cls");

        // exibe uma mensagem previa
        printf("Defina o tamanho da matriz maior ou igual 2 x 2.\n\n");

        // solicita ao usuario as entradas para definir o tamanho da matriz
        printf("Informe o número de linhas: ");
        scanf("%d", &vLin_als);
        printf("Informe o número de colunas: ");
        scanf("%d", &vCol_als);

        if ((vLin_als < 2) or (vCol_als < 2))
        {
            // mensagem de aviso ao usuario
            if (vLin_als < vCol_als)
            {
                printf("\nA matriz deve ter mais que %d linha!", vLin_als);
            }
            else if (vLin_als > vCol_als)
            {
                printf("\nA matriz deve ter mais que %d coluna!", vCol_als);
            }
            else
            {
                printf("\nA matriz deve ser maior que %d x %d!", vLin_als, vCol_als);
            }

            // muda de linha
            printf("\n\n");

            //espera a leitura e ação do usuario
            system("pause");
        }
    } while ((vLin_als < 2) or (vCol_als < 2)); // não permite que matriz menor que 2 x 2

    // cria a matriz com tamanho N x M
    float vMat_als[vLin_als][vCol_als];

    // exibe uma mensagem previa
    printf("\nDefina os valores de X e Y.\n\n");

    // solicita ao usuario os valores para preenchimento da matriz  X e Y
    printf("Informe um valor para X: ");
    scanf("%f", &vX_als);
    printf("Informe um valor para Y: ");
    scanf("%f", &vY_als);

    // faz um laço para montar a tabela a partir da matriz
    // este 'for' representa as linhas
    for (vI_als = 0; vI_als < vLin_als; vI_als++)
    {
        // faz um laço para montar a tabela a partir da matriz
        // este 'for' representa as colunas
        for (vJ_als = 0; vJ_als < vCol_als; vJ_als++)
        {
            // insere o valor na celula
            vMat_als[vI_als][vJ_als] = (1 - (vI_als + vY_als) * (vJ_als * vX_als));
        }
    }

    // muda de linha
    printf("\n");

    // faz um laço para montar a tabela a partir da matriz
    // este 'for' representa as linhas
    for (vI_als = 0; vI_als < vLin_als; vI_als++)
    {
        // faz um laço para montar a tabela a partir da matriz
        // este 'for' representa as colunas
        for (vJ_als = 0; vJ_als < vCol_als; vJ_als++)
        {
            // insere o valor da celula formatando para 2 casas depois da virgua
            printf("%.2f\t", vMat_als[vI_als][vJ_als]);
        }
        // muda de linha
        printf("\n");
    }

    // muda de linha
    printf("\n\n");

    // exibe uma mensagem previa
    printf("De acordo com a tabela acima informe as coordenadas do valor que deseja visualizar (X e Y).\n\n");

    do
    {
        // solicita ao usuario os valores para preenchimento da matriz  X e Y
        printf("Informe a linha que deseja consultar: ");
        scanf("%d", &vLin_als);
        printf("Informe a coluna que deseja consultar: ");
        scanf("%d", &vCol_als);

        if ((((vLin_als - 1) < 0) or ((vCol_als - 1) < 0)) or ((vLin_als > vI_als) or (vCol_als > vJ_als)))
        {
            // verifca qual mensagem vai exibir
            if (((vLin_als - 1) < 0) or ((vCol_als - 1) < 0))
            {
                printf("\n\nNenhuma das coordenadas pode ser menor que um!");
            }
            else if ((vLin_als > vI_als) or (vCol_als > vJ_als))
            {
                printf("\nNenhuma das coordenadas pode ser maior que o lado da matriz!");
            }

            // muda de linha
            printf("\n\n");

            //espera a leitura e ação do usuario
            system("pause");
        }
    } while ((((vLin_als - 1) < 0) or ((vCol_als - 1) < 0)) or ((vLin_als > vI_als) or (vCol_als > vJ_als))); // não permite que a coordenada seja menor que 1 ou maior q o tamanho da matris

    // mostra a celula escolhida
    printf("\n\nO valor contido na posição requisitada pelas coordenadas é: %.2f", vMat_als[vLin_als - 1][vCol_als - 1]);

    // muda de linha
    printf("\n\n");

    // finaliza
    return 5500;
}
