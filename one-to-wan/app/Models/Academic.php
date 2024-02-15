<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{

    protected $fillable = ['course', 'year'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}

