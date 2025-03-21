<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function insertSql(){
        $query = DB::insert('insert into mahasiswas (nama, nobp, email, nohp, jurusan, prodi, tgllahir, created_at, updated_at) values("Hanifa Ramadhani","2311082020",
        "hanifa@gmail.com","082112345678","Teknologi Informasi","TRPL","2004-10-29", now(),now())');
        return "berhasil insert data mahasiswa";
    }

    public function insertPrepared(){
        $query = DB::insert('insert into mahasiswas (nama, nobp, email, nohp, jurusan, prodi, tgllahir, created_at, updated_at) values (?,?,?,?,?,?,?,?,?)',["Nadya Hermalia Putri","2311082034",
        "nadya@gmail.com","082112345670","Teknologi Informasi","TRPL","2004-10-18", now(),now()]);
        return "berhasil insert data mahasiswa";
    }

    public function index()
    {
        //
        DB::Listen( function ($query) {
        logger("Query". $query->sql." |binding " .implode(",", $query->bindings));
    });
    //mengambil semua data mahasiswa
    $data = Mahasiswa::all();
    //dd($data);

    dump($data);
    return view("mahasiswa.index", compact("data"));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
