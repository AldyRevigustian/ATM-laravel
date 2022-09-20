<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraws extends Model
{
    use HasFactory;

    protected $fillable = [
        'rekening',
        'total'
    ];
}
