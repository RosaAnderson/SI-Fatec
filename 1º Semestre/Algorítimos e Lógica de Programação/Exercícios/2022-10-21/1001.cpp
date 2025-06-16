#include "stdio.h"

/*
    usar for para iniciar em (-5) e finalizar em 30
    só exibir numeros positivos
    mostrar os numeros pares de 1 a 10
    mostrar os numeros impares de 11 a 20
    mostrar o intervalo completo de 21 a 30
*/

int main()
{
    int i;

    for (i = (-5); i <= 30; i++)
    {
        if (i < 0)
        {
            continue;
        }


        if (i % 2 != 0) 
        {
            continue;
        }


        /* code */
    }
    


    return 5500;
}