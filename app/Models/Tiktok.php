<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiktok extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'url',
        'network',
        'description',
        'price',
        'status',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
