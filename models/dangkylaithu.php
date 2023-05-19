<?php
class dangkylaithu
{
	private $hovaten;
	private $id_car;
	private $id_daily;
	private $sodienthoai;
	private $ten_tinhthanhpho;
	private $ngaydukien;
	private $username;
	
	public function gethovaten(){return $this->hovaten;}
	public function getid_car(){return $this->id_car;}
	public function getid_daily(){return $this->id_daily;}
	public function getsodienthoai(){return $this->sodienthoai;}
	public function getten_tinhthanhpho(){return $this->ten_tinhthanhpho;}
	public function getngaydukien(){return $this->ngaydukien;}
	public function getusername(){return $this->username;}

	function __construct($_hovaten,$_id_car,$_id_daily,$_sodienthoai,$_ten_tinhthanhpho,$_ngaydukien, $_username){
		$this->hovaten = $_hovaten;
		$this->id_car = $_id_car;
		$this->id_daily = $_id_daily;
		$this->sodienthoai = $_sodienthoai;
		$this->ten_tinhthanhpho = $_ten_tinhthanhpho;
		$this->ngaydukien = $_ngaydukien;
		$this->username = $_username;
	}
}
?>