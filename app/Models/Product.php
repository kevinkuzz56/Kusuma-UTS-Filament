<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'harga',
        'category_id',
    ];

    protected $casts = [
        'harga' => 'decimal:2',
    ];

    public function setKodebarangAttribute($value): void
    {
        $this->attributes['kode_barang'] = strtoupper(trim($value));
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
