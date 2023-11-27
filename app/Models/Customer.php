<?php
// app\Models\Customer.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory; // Add the HasFactory trait
    public $table = 'customers';
    // Other model code

    // Ensure you have defined relationships, fillable attributes, etc.
}
