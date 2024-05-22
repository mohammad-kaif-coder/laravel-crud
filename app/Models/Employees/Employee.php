<?php

namespace App\Models\Employees;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model {

    use HasFactory;

    protected $guarded = ['_token'];
    protected $table = 'tbl_employees';
    protected $filable = ['name', 'email', 'number'];
}
