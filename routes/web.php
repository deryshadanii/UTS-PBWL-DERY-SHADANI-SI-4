<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/produk', function () {
    $kode = ['BRG001', 'BRG002', 'BRG003'];
    $nama = ['Pena', 'Buku', 'Penggaris'];
    $jenis = ['Alat tulis', 'Alat tulis', 'Alat tulis'];
    $harga = [20000, 15000, 10000];
    $jumlah = count($kode);
    return view('produk', compact('kode', 'nama', 'jenis', 'harga', 'jumlah'));
});