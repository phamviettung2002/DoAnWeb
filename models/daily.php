<?php
class daily
{
	private $id_daily;
	private $ten_daily;
	private $id_tinhthanhpho;
	
	public function getid_daily(){return $this->id_daily;}
	public function getten_daily(){return $this->ten_daily;}
	public function getid_tinhthanhpho(){return $this->id_tinhthanhpho;}
	
	function __construct($_id_daily,$_ten_daily,$_id_tinhthanhpho){
		$this->id_daily = $_id_daily;
		$this->ten_daily = $_ten_daily;
		$this->id_tinhthanhpho = $_id_tinhthanhpho;
	}
}
?>