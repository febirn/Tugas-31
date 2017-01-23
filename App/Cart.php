<?php

namespace App;

Class Cart
{
	private $produk;

	public function __construct(Produk $produk)
	{
		$this->produk = $produk;
	}

	public function setRupiah($harga)
	{
		return "Rp. " . number_format($harga, 0, ".", ".");
	}

	public function cekProduk($idProduk)
	{
		foreach ($this->produk->data as $this->key => $this->val) {
			if ($idProduk == $this->val['idProduk']) {
				return $this->val;
			}
		}
	}

	public function tampilProduk()
	{
		foreach ($this->produk->data as $this->key => $this->val) {
			echo "ID PRODUK    : " . $this->val['idProduk'] . "\n";
			echo "NAMA PRODUK  : " . $this->val['namaProduk'] . "\n";
			echo "BERAT PRODUK : " . $this->val['beratProduk'] . "\n";
			echo "HARGA PRODUK : " 
				. $this->setRupiah($this->val['hargaProduk']) . "\n";

			$this->batas();
		}
	}

	private function cekCart()
	{
		if (!empty($this->cart)) {
			$this->cart = $this->cart;
		} else {
			$this->cart = array();

			echo "KERANJANG BELANJA ANDA MASIH KOSONG ..! \n \n" 
				. "BELANJA YUK..! \n \n";
		}
	}

	public function addToCart($idProduk, $qty)
	{
		$this->qty = $qty;

		if ($this->val['stokProduk'] < $this->qty ) {
			$this->cekProduk($idProduk);

			echo "MOHON MAAF, QUANTITY YANG ANDA MASUKKAN UNTUK PRODUK \"" 
				. $this->val['namaProduk'] . "\" MELEBIHI STOK PRODUK KAMI";

		} else {
			$this->cekProduk($idProduk);

			$this->cart[] = [
				'idProduk'		=>	$this->val['idProduk'],
				'namaProduk'	=>	$this->val['namaProduk'],
				'beratProduk'	=>	$this->val['beratProduk'],
				'hargaProduk'	=>	$this->val['hargaProduk'],
				'quantity'		=>	$this->qty,
				'totalHarga'	=>	$this->val['hargaProduk'] * $this->qty,
			];

			echo "PRODUK \"" . $this->val['namaProduk'] . "\" SEBANYAK " 
				. $this->qty . " BUAH BERHASIL DITAMBAHKAN " 
				. "KE KERANJANG BELANJA \n \n";
		}
	}

	public function totalHarga()
	{
		$this->cart[$this->key]['totalHarga']  
			= $this->cart[$this->key]['quantity'] 
			* $this->cart[$this->key]['hargaProduk'];
	}

	public function tambahProduk($key)
	{
		$this->key = $key;
		if ($this->cart[$key]['quantity'] >= $this->val['stokProduk'] ) {
			echo "MOHON MAAF, QUANTITY \"" . $this->val['namaProduk'] 
				. "\" TIDAK BISA DITAMBAH LAGI "
				. "KARENA MELEBIHI STOK PRODUK KAMI \n";
		} else {
			$this->cart[$this->key]['quantity'] += 1;
			$this->totalHarga();
		}
	}

	public function kurangProduk($key)
	{
		$this->key = $key;
		if ($this->cart[$this->key]['quantity'] <= 1) {
			$this->cart[$this->key]['quantity'] = 1;
			$this->totalHarga();
		} else {
			$this->cart[$this->key]['quantity'] -= 1;
			$this->totalHarga();
		}
	}

	public function hapusProduk($key)
	{
		$this->key = $key
;		unset($this->cart[$this->key]);
	}

	public function hapusCart()
	{
		unset($this->cart);
	}

	public function subTotal()
	{
		return $this->setRupiah(array_sum(
			array_column($this->cart, 'totalHarga')));
	}

	public function tampilCart()
	{
		$this->cekCart();

		foreach ($this->cart as $value) {
			echo "ID PRODUK    : " . $value['idProduk'] . "\n";
			echo "NAMA PRODUK  : " . $value['namaProduk'] . "\n";
			echo "BERAT PRODUK : " . $value['beratProduk'] . "\n";
			echo "HARGA PRODUK : " 
				. $this->setRupiah($value['hargaProduk']) . "\n";
			echo "QUANTITY     : " . $value['quantity'] . "\n";
			echo "HAGA TOTAL   : " 
				. $this->setRupiah($value['totalHarga']) . "\n";

			$this->batas();
		}
		
		echo "SUB TOTAL    : " . $this->subtotal() . "\n";
	}

	public function batas()
	{
		echo str_repeat("-", 27) . "\n";
	}

}

?>