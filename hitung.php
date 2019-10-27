<?php
class Hitung
#protected dan Publik bisa
#sedangkan private engga bisa
{
	public $hitung;
	
	public function setVar($hitungan)
	{
		$this->hitung = $hitungan;
	}
}
##Pewarisan 1
class penjumlahandanpengurangan extends Hitung
{
	public function penjumlahan()
	{
		$text = 'Penjumlahan 14 + 3 Adalah = <br/> Jawab : '.$this->hitung.'<br/>';
		return $text;
	}
	public function pengurangan()
	{
		$text = 'Pengurangan 16 - 2 Adalah = </br> Jawab : '.$this->hitung. '<br/><br/>';
		return $text;
	}
}


class perkaliandanpembagian extends Hitung
{
	public function perkalian()
	{
		$text = 'Perkalian 12 x 3 Adalah = <br/> Jawab : '.$this->hitung.'<br/>';
		return $text;
	}
	public function pembagian()
	{
		$text = 'Pembagian 20 : 2 Adalah = </br> Jawab : '.$this->hitung. '<br/><br/>';
		return $text;
	}
}

class sisahasilbagi extends Hitung
{
	public function sisahasilbagi()
	{
		$text = 'Pembagian 13 : 3 Adalah = <br/> Jawab : '.$this->hitung.' </br> Lebih : ';
		return $text;
	}
	public function lebih()
	{
		$text = ''.$this->hitung. '</br>';
		return $text;
	}
	public function genapganjil()
	{
		if ($this->hitung % 2 == 0){
                        echo "$this->hitung adalah bilangan genap <br />";
            }
            else {
                        echo "$this->hitung adalah bilangan Ganjil <br />";
            }
	}
}

# Objek Penjumlahan dan Pengurangan
$hitung1 = new penjumlahandanpengurangan();
$hitung1->setVar("17");
echo $hitung1->penjumlahan();

$hitung2 = new penjumlahandanpengurangan();
$hitung2->setVar("14");
echo $hitung2->pengurangan();

# Perkalian dan Pembagian
$hitung3 = new perkaliandanpembagian();
$hitung3->setVar("36");
echo $hitung3->perkalian();

$hitung4 = new perkaliandanpembagian();
$hitung4->setVar("10");
echo $hitung4->pembagian();

$hitung5 = new sisahasilbagi();
$hitung5->setVar("4");
echo $hitung5->sisahasilbagi();

$hitung6 = new sisahasilbagi();
$hitung6->setVar("1");
echo $hitung6->lebih();
echo $hitung6->genapganjil();

?>
