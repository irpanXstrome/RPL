<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    protected $guarded = ['nim'];
    protected $primaryKey = 'nim';

    protected $with = ['candidate'];


    use HasFactory;
    public function candidate(): BelongsTo
    {
        return $this->belongsTo(Candidate::class);
    }
}
