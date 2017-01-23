<?php

namespace App;

Class Produk
{
	public function __construct()
	{
		$this->data[] = [
			'idProduk'			=>	"AI001",
			'namaProduk'		=>	'Aqua',
			'kategoriProduk'	=>	'Air Mineral',
			'beratProduk'		=>	'1500 ml',
			'stokProduk'		=>	'3',
			'hargaProduk'		=>	'5000', 
		];

		$this->data[] = [
			'idProduk'			=>	'AI002',
			'namaProduk'		=>	'LeMineral',
			'kategoriProduk'	=>	'Air Mineral',
			'beratProduk'		=>	'1500 ml',
			'stokProduk'		=>	'3',
			'hargaProduk'		=>	'5500', 
		];
	}
}

?>