<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'description', 'short_description', 'is_visible', 'image', 'header_image'
    ];

    public function subservices() {
        return $this->hasMany(SubService::class);
    }
}