<?php
	class Feedback
	{
		public function __construct(private int $id_feedback = 0,
									private $praia = null,
									private string $nota = ""){}
		
		public function getIdFeedback()	{return $this -> id_feedback;}
		public function getPraia()		{return $this -> praia;}
		public function getNota()		{return $this -> nota;}
	}
?>