<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'game',
        'created_at',
        'creator',
        'link',
        'name',
    ];


    public function creator()
    {
        return $this->hasOne(User::class, 'id', 'creator');
    }

    public function Game()
    {
        return $this->hasOne(Games::class, 'id', 'game');
    }

    public function Players()
    {
        return $this->hasMany(User::class, 'playing_at', 'id');
    }
}
