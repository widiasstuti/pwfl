<?php
class perkenalan
{
	public $nama;
	public $status;

	public function __construct($nama, $status)
	{
		$this->nama = $nama;
		$this->status = $status;
	}

	public function tampilkan()
	{
		$text = 'perkenakan saya '.$this->nama.' seorang '.$this->status.'<br/><br/>';
		return $text;
	}
}

$perkenalan = new perkenalan("Harminto Mulyo","Dosen");
echo $perkenalan->tampilkan();

?>