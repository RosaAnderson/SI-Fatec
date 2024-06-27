<?php

    class Editora{
        public function __construct(
            private int $edi_id = 0,
            private string $edi_nome = "",
            private string $edi_status = ""
        ){}
        
        //Getter's

        public function getEdi_id()
        {
            return $this->edi_id;
        }

        public function getEdi_nome()
        {
            return $this->edi_nome;
        }

        public function getEdi_status()
        {
            return $this->edi_status;
        }

        //Setter's

        public function setEdi_id($edi_id)
        {
            $this->edi_id = $edi_id;

            return $this;
        }

        public function setEdi_nome($edi_nome)
        {
            $this->edi_nome = $edi_nome;

            return $this;
        }

        public function setEdi_status($edi_status)
        {
            $this->edi_status = $edi_status;

            return $this;
        }
    }

?>