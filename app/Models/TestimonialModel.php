<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialModel extends Model
{
    use HasFactory;
    // Nama tabel
    protected $table = 'testimonial';

    // Primary key
    protected $primaryKey = 'te_id';

    // Auto increment
    public $incrementing = true;

    // Tipe primary key
    protected $keyType = 'int';

    // Tidak menggunakan created_at & updated_at
    public $timestamps = false;

    // Kolom yang bisa diisi
    protected $fillable = [
        'te_img',
    ];

    // Casting tipe data
    protected $casts = [
    ];
}
