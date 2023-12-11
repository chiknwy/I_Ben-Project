<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spbu extends Model
{
    use HasFactory;
    protected $fillable = ['spbu_name', 'spbu_address', 'spbu_phone'];
}
