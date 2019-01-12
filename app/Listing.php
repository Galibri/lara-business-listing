<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'website', 'email', 'phone', 'bio'
    ];

    /**
     * Add belongs to relationship
     *
     * @return void
     */
    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
