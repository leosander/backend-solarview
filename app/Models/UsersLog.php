<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersLog extends Model
{
    use HasFactory;

    
    protected $table = 'users_log';
    protected $fillable = ['user_id', 'login_date'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}