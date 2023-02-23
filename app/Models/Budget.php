<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'description',
        'group',
        'category',
        'program',
        'sub_program',
        'department',
        'unit_of_measurement',
        'period',
        'quantity',
        'unit_price',
        'total_exclusive',
        'vat',
        'total_inclusive',
    ];
}
