<?php
class Connection{
	
	var $Server = "localhost";
	var $Username = "root";
	var $Password = "";
	var $Database = "projetofinal";
	var $Porta = "5432";
		
	function __construct(){
		$this->Conectar();
	}
		
	function Conectar(){
		if(!($conectar = mysql_connect($this->Server,$this->Username,$this->Password))){
			echo "Erro ao tentar abrir a conex�o!";
		}else{
			if(!($con = mysql_select_db($this->Database,$conectar))){
				echo "Erro ao selecionar o banco!";
			}
		}
	}
}
?>