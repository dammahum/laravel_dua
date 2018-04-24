<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    protected $table = 'santri';

    protected $fillable = ['nama','alamat','tgl_lahir','jenis_kelamin'];
}
