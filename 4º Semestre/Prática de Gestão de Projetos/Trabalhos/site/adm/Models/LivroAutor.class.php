<?php

class LivroAutor{
    public function __construct(
        private int $lau_liv_id = 0,
        private int $lau_aut_id = 0
    ){}

    //Getter's
    public function getLau_liv_id()
    {
        return $this->lau_liv_id;
    }

    public function getLau_aut_id()
    {
        return $this->lau_aut_id;
    }

    //Setter's
    public function setLau_liv_id($lau_liv_id)
    {
        $this->lau_liv_id = $lau_liv_id;

        return $this;
    }

    public function setLau_aut_id($lau_aut_id)
    {
        $this->lau_aut_id = $lau_aut_id;

        return $this;
    }
}

?>