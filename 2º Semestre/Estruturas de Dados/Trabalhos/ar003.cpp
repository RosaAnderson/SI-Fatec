#include "stdio.h"
#include "string.h"
#include "stdlib.h"

#define vMaxList 10
#define vNameSize 15

struct ProductList 
    {
        int   fCodigo;
        char  fName[vNameSize];
        bool  fEstoque;
        float fPreco;
    };

int main()
{
    struct ProductList produtos[vMaxList];
    int tProduct = 0;

    system("cls");

    printf("\n\n\nIniciando a lista de produtos.\n");

    // Inserção de produtos
    for (int i = 0; i < vMaxList; i++)
    {
        printf("=========================================\n");

        struct ProductList nProduct;

        printf("Produto.......................: %d\n", i + 1);

        printf("Codigo........................: ");
        scanf("%d", &nProduct.fCodigo);

        printf("Nome..........................: ");
        scanf("%s", nProduct.fName);

        printf("Em estoque (0 - Nao, 1 - Sim).: ");
        scanf("%d", &nProduct.fEstoque);

        printf("Preco.........................: ");
        scanf("%f", &nProduct.fPreco);

        printf("=========================================");

        produtos[i] = nProduct;

        tProduct ++;

        char continuar;
        printf("\n\nDeseja inserir mais produtos? (S/N): ");
        scanf(" %c", &continuar);

        if (continuar != 'S' and continuar != 's')
        {
            break;
        }
        else
        {
            printf("\n");
        }
    }
/**
    // Exibição dos produtos
    printf("\nLista de Produtos:\n");
    for (int i = 0; i < tProduct; i++)
    {
        struct ProductList produto = produtos[i];
        printf("Produto....: %d:\n", i + 1);
        printf("Codigo.....: %d\n", produto.fCodigo);
        printf("Nome.......: %s\n", produto.fName);
        printf("Em estoque.: %s\n", produto.fEstoque? "Sim" : "Nao");
        printf("Preco......: %.2f\n\n", produto.fPreco);
    }
/**/
    // Busca de produtos pelo nome
    char vFind[vNameSize];
    printf("\n\n\n=========================================\n");
    printf("Digite o nome, ou parte do nome, \ndo produto que deseja buscar: ");
    scanf("%s", vFind);
    printf("=========================================\n");

    printf("\nResultados da Busca:\n");
    int vFound = 0;

    for (int i = 0; i < tProduct; i++) 
    {
        printf("-----------------------\n");

        struct ProductList produto = produtos[i];

        if (strstr(produto.fName, vFind) != NULL) 
        {
            printf("Produto....: %d:\n", i + 1);
            printf("Codigo.....: %d\n", produto.fCodigo);
            printf("Nome.......: %s\n", produto.fName);
            printf("Em estoque.: %s\n", produto.fEstoque ? "Sim" : "Nao");
            printf("Preco......: %.2f\n", produto.fPreco);

            vFound ++;
        }
        printf("-----------------------\n\n");
    }

    if (vFound == 0)
    {
        printf("\n\n\nNenhum produto encontrado com o nome '%s'.\n\n\n", vFind);
    }

    return 5400;
}