<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
       'user_id', 'fullname', 'brithday', 'phone', 'address'
    ];

    public function user():belongsTo{

        return $this->belongsTo(User::class, 'user_id');

    }
}
