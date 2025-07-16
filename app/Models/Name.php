<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    use HasFactory;

    protected $table = 'names';  // Optional if table name matches plural of model

    // Allow mass assignment on 'names' column
    protected $fillable = ['names'];
}
