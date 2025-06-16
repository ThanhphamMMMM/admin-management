<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'descide'
    ];

    public function roleuser() {

        return $this->hasMany(User::class, 'users');
    }
    
}
