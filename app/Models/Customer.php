<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lookup;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory;
    protected $fillable = [
        'name', 'gender_id', 'email', 'phone', 'address', 'birthdate', 'is_active'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'birthdate' => 'date',
        'is_active' => 'boolean',
    ];

    /**
     * Customer belongs to a lookup table
    */
    public function lookup(){
        return $this->belongsTo(Lookup::class);
    }
}
