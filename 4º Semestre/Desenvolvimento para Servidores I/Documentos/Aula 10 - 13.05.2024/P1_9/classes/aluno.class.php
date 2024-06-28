<?php
 	class Aluno
 	{
 		
		function __construct(private string $ra = ""){}
 		
 		function getRa()
 		{
 			return $this->ra;
 		}
        		
 		
 		function setRa($ra)
 		{
 			$this->ra = $ra;
 		}
        
 	}
?>