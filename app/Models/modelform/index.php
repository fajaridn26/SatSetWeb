<?php 

namespace App/Model
class index extends Model{
	public $nama,$paket,$link;

	public function gettext($nama,$paket){
		$this->nama=$nama;
		$this->paket=$paket;
		$this->link="https://api.whatsapp.com/send?phone=6281936666423&text=Halo,%20saya%20mau%20bertanya%20tentang%20jasa%20pembuatan%20website";
		return $this->link;
	}
}
?>