<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guest extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone',
        'is_lactose_free',
        'is_gluten_free',
        'is_vegetarian',
        'is_vegan',
        'is_child',
        'notes',
        'is_participated'
    ];

    protected function casts(): array
    {
        return [
            'is_lactose_free' => 'boolean',
            'is_gluten_free' => 'boolean',
            'is_vegetarian' => 'boolean',
            'is_vegan' => 'boolean',
            'is_child' => 'boolean',
            'is_participated' => 'boolean'
        ];
    }

}
