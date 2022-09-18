<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'mobile',
    ];

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('name', 'regexp', request(['search']))
                  ->orwhere('address', 'regexp', request(['search']));
        }
    }

}
