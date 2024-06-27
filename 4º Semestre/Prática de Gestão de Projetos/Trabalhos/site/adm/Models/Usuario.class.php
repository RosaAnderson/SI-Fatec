<?php

    require_once "Pessoa.class.php";

    class Usuario extends Pessoa{
        public function __construct(
            private int $usu_id = 0,
            private string $usu_status = "",
            private string $usu_data = "",
            private string $usu_dnasc = "",
            private string $usu_email = "",
            protected string $usu_senha = "",
            private string $usu_tipo = "",
            private string $usu_cpf = "",
            $nome = ""
        )
        {
            parent:: __construct($nome);    //Construção da classe filha "Pessoa"
        }

        //Getter's

        public function getUsu_id()
        {
            return $this->usu_id;
        }

        public function getUsu_status()
        {
            return $this->usu_status;
        }

        public function getUsu_data()
        {
            return $this->usu_data;
        }

        public function getUsu_dnasc()
        {
            return $this->usu_dnasc;
        }

        public function getUsu_email()
        {
            return $this->usu_email;
        }

        public function getUsu_senha()
        {
            return $this->usu_senha;
        }

        public function getUsu_tipo()
        {
            return $this->usu_tipo;
        }

        public function getUsu_cpf()
        {
            return $this->usu_cpf;
        }


        //Setter's

        public function setUsu_data($usu_data)
        {
            $this->usu_data = $usu_data;

            return $this;
        }

        public function setUsu_status($usu_status)
        {
            $this->usu_status = $usu_status;

            return $this;
        }

        public function setUsu_dnasc($usu_dnasc)
        {
            $this->usu_dnasc = $usu_dnasc;

            return $this;
        }

        public function setUsu_email($usu_email)
        {
            $this->usu_email = $usu_email;

            return $this;
        }

        public function setUsu_senha($usu_senha)
        {
            $this->usu_senha = $usu_senha;

            return $this;
        }

        public function setUsu_tipo($usu_tipo)
        {
            $this->usu_tipo = $usu_tipo;

            return $this;
        }

        public function setUsu_cpf($usu_cpf)
        {
            $this->usu_cpf = $usu_cpf;

            return $this;
        }

            /**
             * Set the value of usu_id
             *
             * @return  self
             */ 
            public function setUsu_id($usu_id)
            {
                        $this->usu_id = $usu_id;

                        return $this;
            }
    }
?>