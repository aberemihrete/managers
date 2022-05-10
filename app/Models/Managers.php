<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Managers extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'Fname',
        'Lname',
        'sex',
        'zone',
        'woreda',
        'address',
        'phone'
        ];
       
}