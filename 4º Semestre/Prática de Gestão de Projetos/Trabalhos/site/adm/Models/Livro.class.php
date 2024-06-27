<?php

class Livro{
    public function __construct(
        private int $liv_id = 0,
        private int $liv_numpag = 0,
        private string $liv_status = "",
        private String $liv_titulo = "",
        private string $liv_isbn = "",
        private string $liv_idioma = "",
        private string $liv_formato = "",
        private string $liv_genero = "",
        private string $liv_resumo = "",
        private int $liv_edi_id = 0,
        private int $liv_aut_id = 0
        ){}

        //Getter's

        public function getLiv_id()
        {
                return $this->liv_id;
        }

        public function getLiv_numpag()
        {
                return $this->liv_numpag;
        }

        public function getLiv_status()
        {
                return $this->liv_status;
        }

        public function getLiv_titulo()
        {
                return $this->liv_titulo;
        }

        public function getLiv_isbn()
        {
                return $this->liv_isbn;
        }

        public function getLiv_idioma()
        {
                return $this->liv_idioma;
        }

        public function getLiv_formato()
        {
                return $this->liv_formato;
        }

        public function getLiv_genero()
        {
                return $this->liv_genero;
        }
        
        public function getLiv_resumo()
        {
                return $this->liv_resumo;
        }
        
        public function getLiv_edi_id()
        {
                return $this->liv_edi_id;
        }

        public function getLiv_aut_id()
        {
                return $this->liv_aut_id;
        }

        //Setter's

        public function setLiv_id($liv_id)
        {
                $this->liv_id = $liv_id;

                return $this;
        }

        public function setLiv_numpag($liv_numpag)
        {
                $this->liv_numpag = $liv_numpag;

                return $this;
        }

        public function setLiv_titulo($liv_titulo)
        {
                $this->liv_titulo = $liv_titulo;

                return $this;
        }

        public function setLiv_isbn($liv_isbn)
        {
                $this->liv_isbn = $liv_isbn;

                return $this;
        }

        public function setLiv_idioma($liv_idioma)
        {
                $this->liv_idioma = $liv_idioma;

                return $this;
        }

        public function setLiv_formato($liv_formato)
        {
                $this->liv_formato = $liv_formato;

                return $this;
        }

        public function setLiv_genero($liv_genero)
        {
                $this->liv_genero = $liv_genero;

                return $this;
        }

        public function setLiv_resumo($liv_resumo)
        {
                $this->liv_resumo = $liv_resumo;

                return $this;
        }

        public function setLiv_edi_id($liv_edi_id)
        {
                $this->liv_edi_id = $liv_edi_id;

                return $this;
        }

        public function setLiv_status($liv_status)
        {
                $this->liv_status = $liv_status;

                return $this;
        }

        public function setLiv_aut_id($liv_aut_id)
        {
                $this->liv_aut_id = $liv_aut_id;

                return $this;
        }  
}

?>