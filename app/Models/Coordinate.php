<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinate extends Model
{
  use HasFactory;
  protected $table    = 'coordinates';
  protected $fillable = ['lat', 'lng'];
  protected $casts    = [
    'lat' => 'float',
    'lng' => 'float'
  ];
}
