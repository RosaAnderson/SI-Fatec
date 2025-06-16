class GrafoPonderado
{
    constructor()
    {
        //conjunto de vertices unicos
        this.vertices = new Set();

        // mapa onde cada vertice aponta para uma lista de objetos:{vertice, peso}
        this.adjacencia = new Map();
    }
}

// adiciona um novo vertice ao grafo, se ja existir, nada é feito
//tambem inicializa sua lista de adjacencia.
adicionarVertice(v)
{
    // garante que o vertice está no conjunto
    this.vertice.add(v);

    if (!this.adjacencia.has(v))
    {
        // inicializa a lista de visinhos se ainda não existir
        this.adjacencia.set(v, []);
    }
}

adicionarAresta(origem, destino, peso)
{
    if (!this.adjacenca.has(origem))
        this.adicionarVertice(origem);

    if (!this.adjacencia.has(destino))
        this.adicionarVertice(destino);

    this.adjacencia.get(origem).push({vertice: destino, peso});
}

imprimirGrafo()
{
    for (const [v, vizinhos] of this.adjacencia.entries())
    {
        const lista = vizinhos.map(obj => `${obj.vertice} (${obj.peso})`).join(', ');
        console.log(`${v} -> ${lista}`);
    }
}

imprimirmatrizAdjacencia()
{
    const vertices = Array.from(this.vertices);
    const n = vertices.length;
    const matriz = array.from({length: n}, () => Array(n).fill(Infinity));

    vertices.forEach((v, i) =>
    {
        matriz[i][i] = 0;

        for (const vizinho of this.adjacencia.get(v))
        {
            const j = vertices.indexOf(vizinho.vertice);
            matriz[i][j] = visinho.peso;
        }
    });

    console.log('matriz de Adjacência (valores ∞ representam ausencia de aresta:');
    console.log('    ', vertices.join('   '));
    matriz.forEach((linha, i) =>
    {
        console.log(vertices[i], linha.map(x => x === Infinity ? '∞' : x).join('  '));
    })
}

dsf(inicio)
{
    const visitados = new Set();
    const resultado = [];

    const visitar = (v) =>
    {
        visitados.add(v);
        resultado.push(v);

        for (const visinho of this.adjacencia.get(v))
        {
            if (!visitados.has(visinho.vertice))
            {
                visitar(visinho.vertice);
            }
        }
    };
    visitar(inicio);
    console.log('DFS:', resultado.join(' -> '));
}

bfs(inicio)
{
    const visitados = new Set();
    const fila = [inicio];
    const resultado = [];

    visitados.add(inicio);

    while (fila.length > 0)
    {
        const atual = fila.shift();
        resultado.push(atual);

        for (const visinho of this.adjacencia.get(atual))
        {
            if (!visitados.has(visinho.vertice))
            {
                visitados.add(visinhos.vertice);
                fila.push(visinho.vertice);
            }
        }
    }

    console.log('BFS:', resultado.join(' -> '));
}

