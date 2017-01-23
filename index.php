<?php

require __DIR__ . "/vendor/autoload.php";

use App\Produk;
use App\Cart;

$produk = new Produk();

$cart = new Cart($produk);
//Menampilakan Semua Produk
echo "SELAMAT DATANG DI TOKO KITA \n";
$cart->batas();
$cart->tampilProduk();

//Memasukkan Produk Ke Dalam Keranjang Belanja
$cart->addToCart('AI002', 1);
$cart->addToCart('AI001', 3);

// print_r($cart->cart);

//Menambah 1 Kuantitas Produk Dengan Parameter KEY
// $cart->kurangProduk(0);
// $cart->tambahProduk(1);
//Mengurnagi 1 Kuantitas Produk Dengan Parameter KEY
// $cart->kurangProduk(0);

// print_r($cart->cart);

//Menghapus Produk Dengan Parameter KEY
// $cart->hapusProduk(0);
// $cart->hapusCart();

// print_r($cart->cart);

//Menampilkan Semua Produk Yang Ada Di Dalam Keranjang Belanja
echo "KERANJANG BELANJA ANDA \n";
$cart->batas();
$cart->tampilCart();

?>