<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'service_id', 'is_visible', 'price'
    ];

    public function service() {
        return $this->belongsTo(Service::class);
    }

}
