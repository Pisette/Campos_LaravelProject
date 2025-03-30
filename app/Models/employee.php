<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable = [
        '_token',
        'employee_id',
        'fname',
        'mname',
        'mname',
        'address',
        'contact_no',

        // Add other fillable fields as needed
    ];
}
