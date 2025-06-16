class Grafos
{
    construtor()
    {
        // estrutura para armazenar os vertices e suas conesoes
        this.adjacencia = {};
    }

    adicionarVertice(vertice)
    {
        // adiciona um novo vertice ao gafo
        if (!this.adjacencia[vertice])
        {
            if (!this.adjacencia[vertice])
            {
                this.adjacencia[vertice] = [];
            }
        }
    }

    // adiciona uma aresta entre dois vertices (não dirigidos)    
    adicionarAresta(vertice1, vertice2)
    {
        if (!this.adjacencia[vertice1])
        {
            this.adicionarVertice[vertice1];
        }

        if (!this.adjacencia[vertice2])
        {
            this.adicionarVertice[vertice2];
        }

        this.adjacencia[vertice1].push[vertice2];
        this.adjacencia[vertice2].push[vertice1];
    }

    // remove uma aresta entre dois vertices
    removerAresta(vertice1, vertece2)
    {
        this.adjacencia[vertice1] = this.adjacencia[vertice1].filter(v => v !== vertice2)
        this.adjacencia[vertice2] = this.adjacencia[vertice2].filter(v => v !== vertice1)
    }

    // remove um vertice e suas conexoes
    removerVertice(vertice)
    {
        while (this.adjacencia[vertice]?.length)
        {
            const adjacente = this.adjacencia[vertice].pop();
            this.removerAresta(vertice, adjacente);
        }
        delete this.adjacencia[vertice];
    }

    // exibe o grafo
    imprimeGrafo()
    {
        for (let vertice in this.adjacencia)
        {
            console.log(`${Vertice} -> ${this.adjacencia[vertice].join(', ')}`);
        }
    }
}