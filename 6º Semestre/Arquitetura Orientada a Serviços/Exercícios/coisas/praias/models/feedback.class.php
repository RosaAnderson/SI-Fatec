<?php
	class Feedback
	{
		public function __construct(
				private int $id_feedback = 0,
				private  $praia = null,
				private int $nota = 0){}
		
		public function getId_feedback()
		{
			return $this->id_feedback;
		}
		public function getPraia()
		{
			return $this->praia;
		}
		public function getNota()
		{
			return $this->nota;
		}
		
	}
?>