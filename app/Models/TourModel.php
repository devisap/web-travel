<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourModel extends Model
{
    use HasFactory;
    // Nama tabel
    protected $table = 'tour';

    // Primary key
    protected $primaryKey = 't_id';

    // Auto increment
    public $incrementing = true;

    // Tipe primary key
    protected $keyType = 'int';

    // Tidak menggunakan created_at & updated_at
    public $timestamps = false;

    // Kolom yang bisa diisi
    protected $fillable = [
        't_title',
        't_destination',
        't_price',
        't_desc',
        't_img',
    ];

    // Casting tipe data
    protected $casts = [
        't_price' => 'integer', // BIGINT (int8) di PostgreSQL
    ];
}
