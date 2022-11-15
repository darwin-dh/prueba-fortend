<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'usuario';
    protected $id = 'id';
    use HasFactory;

    /*     protected $hidden = [
        'password',
        'remember_token',
    ]; */


    public function scopeWithPerfiles($query, $op)
    {
        if ($op)
            return $query->with(['Perfiles']);
    }
    public function Perfiles()
    {
        return $this->hasMany(Perfiles::class, 'iduser', 'id')->withSubmodulo(true);
    }

    public function scopeWithtags($query, $op)
    {
        if ($op)
            return $query->with(['tags']);
    }
    public function tags()
    {
        return $this->morphToMany(Perfiles::class, 'idPerfiles', 'idPerfiles');
    }
}
