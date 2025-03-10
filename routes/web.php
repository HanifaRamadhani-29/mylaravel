<?php


use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
//default routing
Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);


Route::get('/listmahasiswa', function(){
    $arrmhs=[
        'Hanifa',
        'Hanifa',
        'Nabil',
        'Nadya'
    ];
    return view('akademik.mahasiswa', ['mhs' => $arrmhs]);
});


Route::view('/hello', 'hello', ['nama'=>'Nabil Achmad Khoir']);


Route::post('submit', function () {
    return 'form submitted!!';
});


Route::put('update/{id}', function ($id) {
    return 'update data for id:' . $id;
});


Route::delete('delete/{id}', function ($id) {
    return 'delete data for id:' . $id;
});






Route::get('/profile', function () {
    echo '<h1>Profile</h1>';
    return '<p> Jurusan teknologi informasi-Politeknik Negeri Padang</p>';
});


Route::get('mahasiswa/ti/latifa', function () {
    echo "<p style='font-size:40;color:orange'>Jurusan Teknologi Informasi";
    echo "<h1> Selamat Datang Nabil...</h1>";
    echo "<hr>";
    echo "<p> lorem .........................</p>";
});


//route with parameter
Route::get('mahasiswa/{nama}', function ($nama) {
    return '<p> Nama mahasiswa RPL : <b>' . $nama . '</b></p>';
});


Route::get('hitungusia/{nama}/{tahunlahir}', function ($nama, $tahun_lahir) {
    $usia = date('Y') - $tahun_lahir;
    return "<p>Hai <b>" . $nama . "</b><br> usia anda sekarang adalah <b>" . $usia . "</b> tahun.</p>";
});


//route with optional parameter
Route::get('mahasiswa/{nama?}', function ($nama = 'tidak ada') {
    return '<p> Nama mahasiswa RPL : <b>' . $nama . '</b></p>';
});


Route::get('hitungusia/{nama?}/{tahunlahir?}', function ($nama = "tidak ada", $tahun_lahir = "2025") {
    $usia = date('Y') - $tahun_lahir;
    return "<p>Hai <b>" . $nama . "</b><br> usia anda sekarang adalah <b>" . $usia . "</b> tahun.</p>";
});


//route with regular expression
Route::get('user/{id}', function ($id) {
    return '<p> user admin memiliki id <b>' . $id . '</b></p>';
})->where('id', '[0-9]+');


//route redirect
Route::redirect('public', 'mahasiswa');


//route group
Route::prefix('login')->group(function () {
    route::get('mahasiswa', function () {
        return '<h2> login sebagai mahasiswa</h2>';
    });
    route::get('dosen', function () {
        return '<h2> login sebagai dosen</h2>';
    });
    route::get('admin', function () {
        return '<h2> login sebagai admin</h2>';
    });
});


//route fallback
Route::fallback(function () {
    return "<h2> Mohon maaf, halaman yang anda cari <b>tidak ditemukan</b>";
});

Route::get('listmahasiswa', function() {
    $mhs1 = "Hani";
    $mhs2 = "Nabil";
    $mhs3 = "Nadya";

    return view("akademik.mahasiswalist", compact("mhs1","mhs2","mhs3"));
});

Route::get('nilaimahasiswa', function() {
    $nama = "Hanifa Ramadhani";
    $nim = "2311082020";
    $total_nilai = "20";

    return view("akademik.nilaimahasiswa", compact("nama","nim","total_nilai"));
});

Route::get('nilaimahasiswaswitch', function() {
    $nama = "Hanifa Ramadhani";
    $nim = "2311082020";
    $total_nilai = "20";

    return view("akademik.nilaimahasiswaswitch", compact("nama","nim","total_nilai"));
});

Route::get('nilaimahasiswaforloop', function() {
    $nama = "Hanifa Ramadhani";
    $nim = "2311082020";
    $total_nilai = "20";

    return view("akademik.nilaimahasiswaforloop", compact("nama","nim","total_nilai"));
});

Route::get('nilaimahasiswawhileloop', function() {
    $nama = "Hanifa Ramadhani";
    $nim = "2311082020";
    $total_nilai = "7";

    return view("akademik.nilaimahasiswawhileloop", compact("nama","nim","total_nilai"));
});

Route::get('nilaimahasiswaforeach', function() {
    $nama = "Hanifa Ramadhani";
    $nim = "2311082020";
    $total_nilai = [20,100];

    return view("akademik.nilaimahasiswaforeach", compact("nama","nim","total_nilai"));
});

Route::get('nilaimahasiswaforelse', function() {
    $nama = "Hanifa Ramadhani";
    $nim = "2311082020";
    $total_nilai = [20,100];

    return view("akademik.nilaimahasiswaforelse", compact("nama","nim","total_nilai"));
});

Route::get('nilaimahasiswacontinue', function() {
    $nama = "Hanifa Ramadhani";
    $nim = "2311082020";
    $total_nilai = [20,100];

    return view("akademik.nilaimahasiswacontinue", compact("nama","nim","total_nilai"));
});

Route::get('nilaimahasiswabreak', function() {
    $nama = "Hanifa Ramadhani";
    $nim = "2311082020";
    $total_nilai = [80,100,10];

    return view("akademik.nilaimahasiswabreak", compact("nama","nim","total_nilai"));
});

Route::get('/mahasiswati', function () {
    $arrMhs = ['nadya', 'atika', 'hani', 'tiara'];
    return view('akademik.mahasiswapnp', ['Mhs'=>$arrMhs]);
 });
 
 Route::get('/dosenti', function () {
    $arrDsn = ['dosen web framework', 'dosen microservices', 'dosen mobile programming', 'dosen web programming', 'dosen multimedia', 'dosen IOT'];
    return view('akademik.dosenpnp', ['Dsn'=>$arrDsn]);
 });
 
 Route::get('/prodi', function () {
    return view('akademik.prodipnp');
 });