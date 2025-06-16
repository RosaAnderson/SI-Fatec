#include "stdio.h"
#include "stdlib.h"


#define MAX_SIZE 100

typedef struct {
    float data[MAX_SIZE];
    int size;
    int maxSize;
} FloatList;

void initializeList(FloatList *list, int maxSize) {
    list->size = 0;
    list->maxSize = maxSize;
}

int isFull(FloatList *list) {
    return list->size == list->maxSize;
}

int isEmpty(FloatList *list) {
    return list->size == 0;
}

void addRandomElements(FloatList *list, int count) {
    if (isFull(list)) {
        printf("A lista esta cheia. Nao e possivel adicionar mais elementos.\n");
        return;
    }

    for (int i = 0; i < count; i++) {
        float randomValue = (float)rand() / RAND_MAX;  // Gera um numero aleatorio entre 0 e 1
        list->data[list->size++] = randomValue;
    }

    printf("%d elemento(s) aleatorio(s) adicionado(s) a lista.\n", count);
}

void addElement(FloatList *list, float value) {
    if (isFull(list)) {
        printf("A lista esta cheia. Nao e possivel adicionar mais elementos.\n");
        return;
    }

    list->data[list->size++] = value;
    printf("Elemento %.2f adicionado a lista.\n", value);
}

void removeLastElement(FloatList *list) {
    if (isEmpty(list)) {
        printf("A lista esta vazia. Nao e possivel remover elementos.\n");
        return;
    }

    float removedValue = list->data[--list->size];
    printf("Elemento %.2f removido da lista.\n", removedValue);
}

void insertElement(FloatList *list, float value, int index) {
    if (isFull(list)) {
        printf("A lista esta cheia. Nao e possivel adicionar mais elementos.\n");
        return;
    }

    if (index < 0 || index > list->size) {
        printf("indice invalido. Nao e possivel inserir o elemento.\n");
        return;
    }

    // Desloca os elementos para a direita a partir da posicao de insercao
    for (int i = list->size; i > index; i--) {
        list->data[i] = list->data[i - 1];
    }

    list->data[index] = value;
    list->size++;
    printf("Elemento %.2f inserido na posicao %d.\n", value, index);
}

void removeElement(FloatList *list, int index) {
    if (isEmpty(list)) {
        printf("A lista esta vazia. Nao e possivel remover elementos.\n");
        return;
    }

    if (index < 0 || index >= list->size) {
        printf("indice invalido. Nao e possivel remover o elemento.\n");
        return;
    }

    float removedValue = list->data[index];

    // Desloca os elementos para a esquerda a partir da posicao de remocao
    for (int i = index; i < list->size - 1; i++) {
        list->data[i] = list->data[i + 1];
    }

    list->size--;
    printf("Elemento %.2f removido da posicao %d.\n", removedValue, index);
}

void displayList(FloatList *list) {
    if (isEmpty(list)) {
        printf("A lista esta vazia.\n");
        return;
    }

    printf("Lista de elementos:\n");
    for (int i = 0; i < list->size; i++) {
        printf("%.2f ", list->data[i]);
    }
    printf("\n");
}

void displayMenu() {
    printf("\nSelecione uma operacao:\n\n");
    printf("1. Adicionar elementos aleatorios no fim da lista\n");
    printf("2. Adicionar elemento no fim da lista\n");
    printf("3. Remover ultimo elemento\n");
    printf("4. Inserir elemento na lista\n");
    printf("5. Remover elemento da lista\n");
    printf("6. Exibir lista\n");
    printf("0. Sair\n");
    printf("\nOpcao: ");
}

int main() {
    FloatList list;
    int maxSize, option, count;
    float value;
    int index;

    system("cls");

    printf("Digite o tamanho maximo da lista: ");
    scanf("%d", &maxSize);

    initializeList(&list, maxSize);

    do {
        displayMenu();
        scanf("%d", &option);

        system("cls");

        switch (option) {
            case 1:
                printf("Digite a quantidade de elementos aleatorios a serem adicionados: ");
                scanf("%d", &count);
                addRandomElements(&list, count);
                break;
            case 2:
                printf("Digite o valor do elemento a ser adicionado: ");
                scanf("%f", &value);
                addElement(&list, value);
                break;
            case 3:
                removeLastElement(&list);
                break;
            case 4:
                printf("Digite o valor do elemento a ser inserido: ");
                scanf("%f", &value);
                printf("Digite a posicao de insercao: ");
                scanf("%d", &index);
                insertElement(&list, value, index);
                break;
            case 5:
                printf("Digite a posicao do elemento a ser removido: ");
                scanf("%d", &index);
                removeElement(&list, index);
                break;
            case 6:
                displayList(&list);
                break;
            case 0:
                printf("Encerrando o programa.\n");
                break;
            default:
                printf("Opcao invalida. Tente novamente.\n");
        }
    } while (option != 0);

    return 0;
}
