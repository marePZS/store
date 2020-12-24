<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 'description', 'is_sold' ];

    protected $casts = [ 'is_sold' => 'boolean' ];

    public static function sold() {
        return self::where('is_sold', true);
    }

    public static function available() {
        return self::where('is_sold', false);
    }
}
