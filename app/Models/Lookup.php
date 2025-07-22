<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Lookup extends Model
{
    /** @use HasFactory<\Database\Factories\LookupFactory> */
    use HasFactory;

    /*
     The attributes that are mass assignment
     @var list<string>
    */
     protected $fillable = [
        'title', 'type'
    ];

    /**
     * lookup has many customers
     */
    public function customers(){
        return $this->hasMany(Customer::class);
    }
}
