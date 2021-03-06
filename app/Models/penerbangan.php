<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penerbangan extends Model
{
    use HasFactory;
    protected $table = "penerbangan";
    protected $guarded = []; // table apa saja yang tidak boleh di isi

    public function asalLokasi()
    {
        return $this->belongsTo(lokasi::class, 'asal', 'id');
    }

    public function tujuanLokasi()
    {
        return $this->belongsTo(lokasi::class, 'tujuan', 'id');
    }
}
