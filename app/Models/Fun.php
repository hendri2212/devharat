<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fun extends Model
{
    protected $table = 'fun';
    protected $fillable = ['fun_name'];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
