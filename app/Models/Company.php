<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'description', 'is_visible', 'image', 'header_image'
    ];

    public function works() {
        return $this->belongsToMany(Work::class, 'company_work');
    }

}
