<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valentine extends Model
{
    use HasFactory;

    protected $table = 'valentines';

    protected $attributes = [
        'cupid_name' => false,
        'content' => false,
        'email' => false,
        'cupid' => false,
        'content' => false,
        'valentine_token' => false,
        'lover' => null,
        'created_at' => null,
        'updated_at' => null
    ];

     /**
     * Scope a query to only include valentine token.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string  $token
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeValentine($query, $token)
    {
        return $query->where('valentine_token', $token);
    }

     /**
     * Scope a query to only include valentine cupid_name.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string  $cupid_name
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCupidName($query, $cupid_name)
    {
        return $query->where('cupid_name', $cupid_name);
    }
}