<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsModel extends Model
{
    use HasFactory;
    // Nama tabel
    protected $table = 'about_us';

    // Primary key
    protected $primaryKey = 'ab_id';

    // Auto increment
    public $incrementing = true;

    // Tipe primary key
    protected $keyType = 'int';

    // Tidak menggunakan created_at & updated_at
    public $timestamps = false;

    // Kolom yang bisa diisi
    protected $fillable = [
        'ab_id',
        'ab_kenztrans',
        'ab_rentcar',
        'ab_rentcar_img',
        'ab_tour',
        'ab_tour_img'
    ];

    // Casting tipe data
    protected $casts = [
    ];
}
