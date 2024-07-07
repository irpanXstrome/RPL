<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Candidate extends Model
{
    protected $guarded = ['id'];
    protected $with = ['student'];

    use HasFactory;

    public function student() : HasOne
    {
        return $this->hasOne(Student::class,'nim','nim');
    }
}
