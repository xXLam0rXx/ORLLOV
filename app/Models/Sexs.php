<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexs extends Model
{
    use HasFactory;

    protected $fillable = [ 'sex_name' ];
    
}
