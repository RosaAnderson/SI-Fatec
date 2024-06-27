<?php

    class Autor extends Pessoa {
        public function __construct(
            private int $aut_id = 0,
            private string $aut_status = "",
            $nome = null
        )
        {
            parent::__construct($nome); // Chamando o construtor da classe pai "Pessoa"
        }

        // Getter's

        public function getAut_status() {
            return $this->aut_status;
        }

        public function getAut_id()
        {
            return $this->aut_id;
        }

        // Setter's

        public function setAut_status($aut_status) {
            $this->aut_status = $aut_status;

            return $this;
        }

        public function setAut_id($aut_id)
        {
            $this->aut_id = $aut_id;

            return $this;
        }
    }

?>
