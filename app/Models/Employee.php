<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [ 'naming',
                            'name',
                            'post',
                            'sex_id',
                            'salary',
                            'surname',
                            'patronymic' ];
    
    public function Sex() {
        return $this->belongsTo(sex::class, "sex_id", "id");
        
    }
}
