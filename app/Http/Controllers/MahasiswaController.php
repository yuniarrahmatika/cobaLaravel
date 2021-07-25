<?php

namespace App\Http\Controllers;

//memanggil DB
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
//untuk akses model
use App\Student;

class MahasiswaController extends Controller
{
    public function index()
    {
        // $mahasiswa = DB::table('mahasiswa')->get();
        //dump seperti var_dump di php
        //dd -> dump die
        // $mahasiswa = DB::table('students')->get();

        //folder mahasiswa -> file index.blade.php

        $mahasiswa = Student::all();
        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
