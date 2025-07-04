<?php

class Rotas{
    private array $rotas = [];

    public function get(String $caminho, Array $dados){
        $this -> rotas["GET"][$caminho] = $dados;
    }

    public function post(String $caminho, Array $dados_rota){
        $this -> rotas["POST"][$caminho] = $dados_rota;
    }

    public function instancia_rota(String $metodo, String $url ){
        if(isset($this -> rotas[$metodo][$url])){
            $dados_rota = $this -> rotas[$metodo][$url];
			
			$classe = new $dados_rota[0];
            $metodo = $dados_rota[1];
            return $classe -> $metodo();
        }
        exit("Rota Invalida");
    }
}

$router = new Rotas();

//rota inicio
$router -> get("/", [inicioController::class, "inicio"]);

$router -> get("/inserir_game", [gameController::class, "inserir"]);
$router -> post("/inserir_game", [gameController::class, "inserir"]);

$router -> get("/buscar_dados", [gameController::class, "buscar_dados"]);
$router -> get("/lista", [gameController::class, "buscar_games"]);
?>