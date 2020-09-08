<?php 

class produk{
	public $Judul;
	public $Penerbit;
	public $Seri;
	public $harga;
	public $halaman;
	public $versi;

	public function __construct($Judul = "Judul", $Penerbit = "Penerbit", $Seri = "Seri", $harga = "harga", $halaman = "halaman", $versi = "versi"){
		$this->Judul = $Judul;
		$this->Penerbit = $Penerbit;
		$this->Seri = $Seri;
		$this->harga = $harga;
		$this->halaman = $halaman;
		$this->versi = $versi;
	}

	public function getProd(){
		return "$this->Penerbit, $this->Seri, $this->harga";
	}
	public function CetakInfoProduk(){
		$str = "{$this->Judul}, {$this->getProd()}";
		return $str;
	}
}




class komik extends produk{
	public function CetakInfoProduk(){
		$str = "Komik: {$this->Judul}, {$this->getProd()} | halaman: {$this->halaman}";
		return $str;
	}

}

class game extends produk{
	public function CetakInfoProd(){
		$str = "Game: {$this->Judul}, {$this->getProd()} | Versi: {$this->versi}";
		return $str;
	}
}

$Produk1 = new komik("One Piece", "Oda Sensei", "201", 30000, "500 hal");
$Produk2 = new game("Minecraft", "Mojang", "14.0.1", 99000, "-", "Beta");


echo $Produk1->CetakInfoProduk();
echo "<br>";
echo $Produk2->CetakInfoProd();
 ?>
