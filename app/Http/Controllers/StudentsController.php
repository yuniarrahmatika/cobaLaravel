<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        // return view('students.index', ['students' => $students]);
        //kalau nama varnya sama bisa menggunakan fungsi compact
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }   
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //nyobain request sudah dikirim apa blm, isi dari method create
        // return $request;

        //cara I memasukkan data ke database
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->npm = $request->npm;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;

        // $student->save();

        //menggunakan model
        // Student::create([
        //     'nama' => $request->nama,
        //     'npm' => $request->npm,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
        // ]);

        //validasi data agar diisi
        $request->validate([
            'nama' => 'required',
            'npm' => 'required|size:9'
        ],
        //untuk customizing eror message
        [
            'nama.required' => 'Bidang nama wajib diisi',
            'npm.required' => 'Bidang npm wajib diisi',
            'npm.size' => 'NPM harus 9 karakter.'
        ]);

        //jika sudah ada $fillable atau guarded di model
        //maka bisa menggunakan ini
        //all()-> mengambil semua yg ada di filable atau yg tidak ada pada guarded
        Student::create($request->all());

        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //validasi data agar diisi
        $request->validate([
            'nama' => 'required',
            'npm' => 'required|size:9'
        ],
        //untuk customizing eror message
        [
            'nama.required' => 'Bidang nama wajib diisi',
            'npm.required' => 'Bidang npm wajib diisi',
            'npm.size' => 'NPM harus 9 karakter.'
        ]);
        
        Student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'npm' => $request->npm,
                'email' => $request->email,
                'jurusan' => $request->jurusan
            ]);

        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        // return $student;
        return redirect('/students')->with('status','Data Mahasiswa Berhasil Dihapus!');
    }
}
