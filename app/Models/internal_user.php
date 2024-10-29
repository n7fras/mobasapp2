<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInternal extends Model
{
    protected $table = 'internal_user';
    
    protected $fillable = ['id_user', 'name', 'email', 'password'];

    // Event untuk otomatis mengisi 'id_user' sebelum data disimpan
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $latestUser = self::orderBy('id', 'DESC')->first();
            $number = $latestUser ? intval(substr($latestUser->id_user, 1)) + 1 : 1;
            $model->id_user = 'U' . str_pad($number, 4, '0', STR_PAD_LEFT);
        });
    }
}

