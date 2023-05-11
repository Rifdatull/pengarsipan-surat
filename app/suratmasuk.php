<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suratmasuk extends Model
{
    protected $table = "suratmasuk";
    protected $fillable = ['nama_surat','perihal','ditunjukkan','tanggal_surat','pengirim'];
}
