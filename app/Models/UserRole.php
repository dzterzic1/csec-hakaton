<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserRole extends Model
{
    protected $fillable = ['role', 'keyword'];

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'role_id');
    }
}