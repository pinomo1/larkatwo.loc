<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artisan extends Model
{
    use HasFactory;

    protected $table = 'artisan';
    public $timestamps = false;
    protected $guarded = [];

    public function getCategorys()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function getUser(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
