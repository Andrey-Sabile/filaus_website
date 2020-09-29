<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    protected $fillable = ['name', 'student_number', 'mobile_number', 'dietary_requirements'];
    use HasFactory;
}
