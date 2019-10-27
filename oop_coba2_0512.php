<?php
class perkenalan
{
	public $nama;
	public $status;

	public function setVar($new_nama, $new_status)
	{
		$this->nama = $new_nama;
		$this->status = $new_status;
	}

	public function tampilkan()
	{
		$text = 'perkenakan saya '.$this->nama.' seorang '.$this->status.'<br/><br/>';
		return $text;
	}
}

class kenalan_1 extends perkenalan
{
	public function tampilkan()
	{
		$text = 'perkenalan Class Extends 1 => <br/> Haloo, perkenalan Nama Saya : '
		.$this->nama.'<br/> Saya adalah seorang' .$this->status. '<br/><br/>';
		return $text;
	}

} 

class kenalan_2 extends perkenalan
{
	public function tampilkan()
	{
		$text = 'perkenalan Class Extends 2 => <br/> YOYOYO WhatsAPP... Nama Saya :'
		.$this->nama.' <br/> Saya ini seorang'.$this->status.'<br/><br/>';
		return $text;
	}
}

$perkenalan2 = new kenalan_1();
$perkenalan2->setVar("Harminto Mulyo","Dosen");
echo $perkenalan2->tampilkan();

$perkenalan3 = new kenalan_2();
$perkenalan3->setVar("Harminto Mulyo","Dosen");
echo $perkenalan3->tampilkan();

?>