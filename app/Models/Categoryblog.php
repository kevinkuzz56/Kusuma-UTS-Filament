<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Categoryblog extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryBlogFactory> */
    use HasFactory, SoftDeletes;

    protected $table = 'categoryblogs';
    protected $fillable = [
        'name', 'description', 'is_active',
    ];
}
