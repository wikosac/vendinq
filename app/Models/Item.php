<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query) {
        if (request('search')) {
            return $query->where('code', 'like', '%' . request('search') . '%')
                         ->orWhere('name', 'like', '%' . request('search') . '%');
        }
    }

    public function getRouteKeyName()
    {
        return 'code';
    }
}
