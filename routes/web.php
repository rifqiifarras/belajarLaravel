<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SapaController;
use App\Http\Controllers\ProductController;

Route::get('/product', [ProductController::class, 'index']); //untuk menampilkan data 
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);


Route::get('/sapa', [SapaController::class, 'index']);

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama'=> 'Rifqi Farras Listarto',
        'kelas'=> 'D4SM-48-04',
        'nim' => '707082430004',
    ]);
});

// Route::get('/product1', function () {
//     $products = [
//         ['Laptop', 10, 7500000],
//         ['Mouse', 25, 1500000],
//         ['Keyboard', 15, 3000000],
//         ['Monitor', 8, 1000000],
//         ['Printer', 12, 6000000],
//     ];
//     return view('pages.product', ['products' => $products]);
// });

Route::view('/contact', 'pages.contact');





// Route::get('/', function () {
//     return view('pages.beranda');
// });

// // menampilkan data diri Anda
// Route::get('/about', function () {
//     return view('pages.about', [
//         'nama'=> 'Sendy Prayogo',
//         'kelas'=> 'TSM-00',
//         'nim' => '0123456789',
//        ]);
// });


// Route::get('/hello',function(){
//     return view ('hello');
// });

// Route::get('/profil',function(){
//     return view ('profil');
// });

// Route::get('/profil2', function () {
//     return view('profil2', [
//         'nama'  => 'Nama Mahasiswa',
//         'nim'   => '0123456789',
//         'kelas' => 'TRM-00',
//         'prodi' => 'Teknologi Rekayasa Multimedia',
//     ]);
// });

// Route::get('home', function () {
//     return view('pages.home');
// });
