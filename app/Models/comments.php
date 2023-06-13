<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class comments extends Model
{
    use HasFactory, SoftDeletes;

        protected $fillable = [
        'comment',
        'user_id',
        'post_id',
    ];

    public function commenter()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
