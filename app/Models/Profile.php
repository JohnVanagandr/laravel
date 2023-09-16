<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'sexo',
        'birthdate',
        'facebook',
        'instagram',
        'linkedin',
        'user_id',
    ];

    /**
     * Relaciones del modelo
     */


    /**
     * Relaciones uno a uno
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function avatar()
    {
        return $this->hasOne(Avatar::class);
    }
}
