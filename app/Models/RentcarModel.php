<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentcarModel extends Model
{
    use HasFactory;
    // Nama tabel
    protected $table = 'rentcar';

    // Primary key
    protected $primaryKey = 'r_id';

    // Auto increment
    public $incrementing = true;

    // Tipe primary key
    protected $keyType = 'int';

    // Tidak menggunakan created_at & updated_at
    public $timestamps = false;

    // Kolom yang bisa diisi
    protected $fillable = [
        'r_car_name',
        'r_price',
        'r_desc',
        'r_img',
    ];

    // Casting tipe data
    protected $casts = [
        'r_price' => 'integer', // BIGINT (int8) di PostgreSQL
    ];
}
