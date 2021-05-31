<?php

namespace App\Models;

use App\Models\User;
use App\Models\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    public function Country()
    {
        return $this->belongsTo(Country::class);

    }
    public function Users()
    {
        return $this->belongsToMany(User::class);
    }

}
