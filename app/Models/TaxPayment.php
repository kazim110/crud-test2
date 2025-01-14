<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TaxPayment extends Model
{
    use HasFactory;
    protected $fillable =['company_name', 'tax_amount', 'status', 'payment_date'];
}
