<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //[] -> array ini berisi kolom apa saja yang bisa di isi di database
    //$fillable yg boleh di isi
    //$guarded yg ga boleh di isi
    protected $fillable = ['nama','npm','email','jurusan'];
}
