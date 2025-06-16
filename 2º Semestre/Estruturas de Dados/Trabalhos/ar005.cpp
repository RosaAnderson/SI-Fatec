#include <stdio.h>
#include <stdlib.h>

typedef struct Node {
    int data;
    struct Node* next;
} Node;

typedef struct LinkedList {
    Node* head;
} LinkedList;

// Função para inicializar a lista vazia
void iniciarLista(LinkedList* list) {
    list->head = NULL;
}

// Função para reiniciar a lista, liberando todos os nós
void reiniciarLista(LinkedList* list) {
    Node* current = list->head;
    while (current != NULL) {
        Node* temp = current;
        current = current->next;
        free(temp);
    }
    list->head = NULL;
}

// Função para inserir um elemento no início da lista
void inserirInicio(LinkedList* list, int value) {
    Node* newNode = (Node*)malloc(sizeof(Node));
    newNode->data = value;
    newNode->next = list->head;
    list->head = newNode;
}

// Função para inserir um elemento no final da lista
void inserirFim(LinkedList* list, int value) {
    Node* newNode = (Node*)malloc(sizeof(Node));
    newNode->data = value;
    newNode->next = NULL;

    if (list->head == NULL) {
        list->head = newNode;
        return;
    }

    Node* current = list->head;
    while (current->next != NULL) {
        current = current->next;
    }
    current->next = newNode;
}

// Função para inserir um elemento em uma posição específica da lista
void inserirMeio(LinkedList* list, int value, int pos) {
    if (pos <= 0) {
        inserirInicio(list, value);
        return;
    }

    Node* newNode = (Node*)malloc(sizeof(Node));
    newNode->data = value;

    Node* current = list->head;
    int count = 0;

    while (current != NULL && count < pos - 1) {
        current = current->next;
        count++;
    }

    if (current == NULL) {
        printf("Posição inválida!\n");
        free(newNode);
        return;
    }

    newNode->next = current->next;
    current->next = newNode;
}

// Função para remover o primeiro elemento da lista
void removerInicio(LinkedList* list) {
    if (list->head == NULL) {
        printf("A lista está vazia!\n");
        return;
    }

    Node* temp = list->head;
    list->head = list->head->next;
    free(temp);
}

// Função para remover o último elemento da lista
void removerFim(LinkedList* list) {
    if (list->head == NULL) {
        printf("A lista está vazia!\n");
        return;
    }

    if (list->head->next == NULL) {
        free(list->head);
        list->head = NULL;
        return;
    }

    Node* current = list->head;
    while (current->next->next != NULL) {
        current = current->next;
    }

    free(current->next);
    current->next = NULL;
}

// Função para remover um elemento de uma posição específica da lista
void removerMeio(LinkedList* list, int pos) {
    if (list->head == NULL) {
        printf("A lista está vazia!\n");
        return;
    }

    if (pos <= 0) {
        removerInicio(list);
        return;
    }

    Node* current = list->head;
    int count = 0;

    while (current->next != NULL && count < pos - 1) {
        current = current->next;
        count++;
    }

    if (current->next == NULL) {
        printf("Posição inválida!\n");
        return;
    }

    Node* temp = current->next;
    current->next = current->next->next;
    free(temp);
}

// Função para buscar um elemento pelo valor na lista
int buscarPorValor(LinkedList* list, int value) {
    Node* current = list->head;
    int index = 0;

    while (current != NULL) {
        if (current->data == value) {
            return index;
        }
        current = current->next;
        index++;
    }

    return -1; // Valor não encontrado
}

// Função para buscar um elemento pelo índice na lista
int buscarPorIndice(LinkedList* list, int index) {
    Node* current = list->head;
    int count = 0;

    while (current != NULL) {
        if (count == index) {
            return current->data;
        }
        current = current->next;
        count++;
    }

    printf("Índice inválido!\n");
    return -1;
}

// Função para exibir o valor do primeiro elemento da lista
void exibirCabeca(LinkedList* list) {
    if (list->head != NULL) {
        printf("Valor da cabeça: %d\n", list->head->data);
    } else {
        printf("A lista está vazia!\n");
    }
}

// Função para exibir todos os elementos da lista
void exibirLista(LinkedList* list) {
    Node* current = list->head;

    if (current == NULL) {
        printf("A lista está vazia!\n");
        return;
    }

    printf("Elementos da lista: ");
    while (current != NULL) {
        printf("%d ", current->data);
        current = current->next;
    }
    printf("\n");
}

int main() {
    LinkedList list;
    iniciarLista(&list);

    inserirInicio(&list, 3);
    inserirInicio(&list, 2);
    inserirInicio(&list, 1);
    exibirLista(&list);

    inserirFim(&list, 4);
    inserirFim(&list, 5);
    exibirLista(&list);

    inserirMeio(&list, 10, 2);
    exibirLista(&list);

    removerInicio(&list);
    removerFim(&list);
    exibirLista(&list);

    removerMeio(&list, 1);
    exibirLista(&list);

    int index = buscarPorValor(&list, 4);
    if (index != -1) {
        printf("Valor 4 encontrado no índice %d\n", index);
    } else {
        printf("Valor 4 não encontrado na lista\n");
    }

    int value = buscarPorIndice(&list, 1);
    if (value != -1) {
        printf("Valor no índice 1: %d\n", value);
    }

    exibirCabeca(&list);

    reiniciarLista(&list);
    exibirLista(&list);

    return 0;
}
