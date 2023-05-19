<?php
class danhsach
{
	private $ten_xe;
	private $ten_daily;
	private $thoigianlai;
	
	public function getten_xe(){return $this->ten_xe;}
	public function getten_daily(){return $this->ten_daily;}
	public function getthoigianlai(){return $this->thoigianlai;}
	
	function __construct($ten_xe, $ten_daily, $thoigianlai){
		$this->ten_xe = $ten_xe;
		$this->ten_daily = $ten_daily;
		$this->thoigianlai = $thoigianlai;
	}
}
?>