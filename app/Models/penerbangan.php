<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penerbangan extends Model
{
    use HasFactory;
    protected $table = "penerbangan";
    // protected $fillable = []; // table apa saja yang bisa di isi
    protected $guarded = []; // table apa saja yang tidak boleh di isi

    public function asal()
    {
        return $this->belongsTo(lokasi::class, 'asal', 'id');
    }

    public function tujuan()
    {
        return $this->belongsTo(lokasi::class, 'tujuan', 'id');
    }
}
