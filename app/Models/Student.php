<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Student model => students table
    // category => categories
    // ratata => ratatas
    use HasFactory;

    // protected $fillable = ['image', 'name', 'address', 'phone_no'];
    protected $guarded = [];


    // Override default table name
    // protected $table = "student";
     public $timestamps = false;
}
