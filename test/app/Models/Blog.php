<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /*public $timestamps = false;
    kalau kolom created_at dan updated_at tidak ada

    protected $fillable = ['title', 'description']; 
    whitelist (yg boleh diisi jika pakai metode insert mass)

    protected $guarded = []; 
    blacklist (yg tidak boleh diisi jika pakai metode insert mass)*/
}
