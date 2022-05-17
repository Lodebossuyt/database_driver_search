<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Role extends Model
{
    use HasFactory, Searchable;

    protected $guarded = ['id'];

    public function users(){
        return $this->belongsToMany(User::class, 'user_role');
    }
}
