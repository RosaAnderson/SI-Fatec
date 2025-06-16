<?php

    class Endereco{
        public function __construct(
            private int $end_id = 0,
            private string $end_numero = "",
            private string $end_bairro = "",
            private string $end_uf = "",
            private string $end_cidade = "",
            private string $end_cep = "",
            private string $end_logradouro = "",
            private string $end_complemento = "",
            private int $end_usu_id = 0
        ){}

        //Getter's

        public function getEnd_id()
        {
            return $this->end_id;
        }

        public function getEnd_numero()
        {
            return $this->end_numero;
        }

        public function getEnd_bairro()
        {
            return $this->end_bairro;
        }

        public function getEnd_uf()
        {
            return $this->end_uf;
        }

        public function getEnd_cidade()
        {
            return $this->end_cidade;
        }

        public function getEnd_cep()
        {
            return $this->end_cep;
        }

        public function getEnd_rua()
        {
            return $this->end_rua;
        }

        public function getEnd_logradouro()
        {
            return $this->end_logradouro;
        }

        public function getEnd_complemento()
        {
            return $this->end_complemento;
        }

        public function getEnd_usu_id()
        {
            return $this->end_usu_id;
        }

        //Setter's

        public function setEnd_id($end_id)
        {
            $this->end_id = $end_id;

            return $this;
        }

        public function setEnd_numero($end_numero)
        {
            $this->end_numero = $end_numero;

            return $this;
        }

        public function setEnd_bairro($end_bairro)
        {
            $this->end_bairro = $end_bairro;

            return $this;
        }

        public function setEnd_uf($end_uf)
        {
            $this->end_uf = $end_uf;

            return $this;
        }

        public function setEnd_cidade($end_cidade)
        {
            $this->end_cidade = $end_cidade;

            return $this;
        }

        public function setEnd_cep($end_cep)
        {
            $this->end_cep = $end_cep;

            return $this;
        }

        public function setEnd_rua($end_rua)
        {
            $this->end_rua = $end_rua;

            return $this;
        }

        public function setEnd_logradouro($end_logradouro)
        {
            $this->end_logradouro = $end_logradouro;

            return $this;
        }

        public function setEnd_complemento($end_complemento)
        {
            $this->end_complemento = $end_complemento;

            return $this;
        }

        public function setEnd_usu_id($end_usu_id)
        {
            $this->end_usu_id = $end_usu_id;

            return $this;
        }
    }

?>