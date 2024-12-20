<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobVacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'type',
        'position', 'responsibility', 'qualification',
        'created', 'expired', 'department_id'
    ];

    public function department() {
        return $this->belongsTo(Department::class);
    }
}
