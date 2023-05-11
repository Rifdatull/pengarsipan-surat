<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suratkeluar extends Model
{
    protected $table = "suratkeluar";
    protected $fillable = ['nama_surat','perihal','ditunjukkan','tanggal_surat','penerima'];
}
