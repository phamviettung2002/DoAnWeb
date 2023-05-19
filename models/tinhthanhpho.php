<?php
class tinhthanhpho
{
	private $id_tinhthanhpho;
	private $ten_tinhthanhpho;

	public function getid_tinhthanhpho(){return $this->id_tinhthanhpho;}
	public function getten_tinhthanhpho(){return $this->ten_tinhthanhpho;}
	
	function __construct($_id_tinhthanhpho,$_ten_tinhthanhpho){
		$this->id_tinhthanhpho = $_id_tinhthanhpho;
		$this->ten_tinhthanhpho = $_ten_tinhthanhpho;
	}
}
?>