<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'is_visible', 'image'
    ];

    public function companies() {
        return $this->belongsToMany(Company::class, 'company_work');
    }

}
