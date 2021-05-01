<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    use HasFactory;


    protected $primaryKey = 'games_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'url',
        'picture',
        'description',
        'metadata',
    ];


    public function parties()
    {
        return $this->hasMany(Party::class, 'game','id');
    }
}
