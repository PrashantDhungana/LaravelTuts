<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public function companyData(){     //This function name can be anything
        return $this->hasOne('App\Models\Category');
        //Company table path
        
}
}
