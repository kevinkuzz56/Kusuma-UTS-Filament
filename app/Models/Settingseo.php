<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settingseo extends Model
{
    /** @use HasFactory<\Database\Factories\SettingseoFactory> */
    use HasFactory;

    protected $table = 'settingseos';
    protected $fillable = [
        'meta_title', 'meta_description', 
        'meta_keywords', 'robots'
    ];
}
