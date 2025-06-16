#include <stdio.h>
#include <string.h>

int main() {
    // Array de produtos
    const char* produtos[] = {
        "Celular",
        "Computador",
        "Televisor",
        "Fone de ouvido",
        "Mouse",
        "Teclado"
    };

    // Entrada do usuário
    char busca[100];
    printf("Digite o nome do produto a ser buscado: ");
    fgets(busca, 100, stdin);
    busca[strcspn(busca, "\n")] = '\0'; // Remover a quebra de linha

    // Realiza a busca
    int encontrado = 0;
    for (int i = 0; i < sizeof(produtos) / sizeof(produtos[0]); i++) {
        if (strstr(produtos[i], busca) != NULL) {
            printf("Produto encontrado: %s\n", produtos[i]);
            encontrado = 1;
        }
    }

    // Mensagem se nenhum produto for encontrado
    if (!encontrado) {
        printf("Produto não encontrado.\n");
    }

    return 0;
}