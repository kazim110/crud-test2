<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Alocatebudget extends Model
{
    use HasFactory;

    protected $fillable = ['department_name', 'amount_allocated', 'status'];
}
