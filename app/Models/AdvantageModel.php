<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvantageModel extends Model
{
    use HasFactory;
    // Nama tabel
    protected $table = 'advantage';

    // Primary key
    protected $primaryKey = 'a_id';

    // Auto increment
    public $incrementing = true;

    // Tipe primary key
    protected $keyType = 'int';

    // Tidak menggunakan created_at & updated_at
    public $timestamps = false;

    // Kolom yang bisa diisi
    protected $fillable = [
        'a_title',
        'a_desc',
    ];

    // Casting tipe data
    protected $casts = [
    ];
}
