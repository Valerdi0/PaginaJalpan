#include <stdio.h>
#include <stdlib.h>
#include <string.h>
typedef struct elemento nodo;
struct elemento{
    char dato;
    nodo *sig;
};
void insertar(nodo *pc, nodo *fc,char estado);
char suprimir(nodo *pc, nodo *fc);
void imprimir(nodo *p, nodo *f);

int main(void)
{
    char mensaje[100];
    char p[] = "fin";
    scanf("%s",mensaje);
    printf("%d",strcmp(mensaje,p));
    /*char c;
    nodo *colap = NULL,*final = NULL;
    insertar(colap,final,'0');
    insertar(colap,final,'1');
    insertar(colap,final,'2');
    c = suprimir(colap,final);
    printf("%c\n", c);
    imprimir(colap,final);*/
    return 0;
}

nodo* nuevo(void) {
    nodo *q = (nodo*)malloc(sizeof(nodo));
    return q;
}

void insertar(nodo *pc, nodo *fc, char estado) {
    nodo *q;
   // pc = *p;
    //fc = *f;
    q = nuevo();
    q->dato = estado;
    q->sig = NULL;
    if(fc == NULL) pc = fc = q;
    else
        fc = fc->sig = q;
    //*p = pc;
    //*f = fc;
}

char suprimir(nodo *pc, nodo *fc) {
    nodo *q;
    char dato;
    //pc = *p;
    //fc = *f;
    if(pc != NULL){
        q = pc;
        dato = q->dato;
        pc = pc->sig;
        if(pc == NULL) fc = NULL;
        free(q);
        //*p = pc;
        //*f = fc;
        return dato;
    }
    printf("Cola vacia\n");
    return '0';
}

void imprimir(nodo *p, nodo *f){
    nodo *aux;
    aux = p;
    while(aux){
        printf("%c ",aux->dato);
        aux = aux->sig;
    }
    printf("\n");
}