<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floodplain extends Model
{
  use HasFactory;


  protected $table    = 'floodplains';
  protected $fillable = ['name', 'description'];

  public function coordinates()
  {
    return $this->hasMany(Coordinate::class);
  }

  /**
   * Get the flood images for the area.
   */
  public function floodImages()
  {
    return $this->hasMany(FloodImage::class);
  }

  /**
   * Save coordinates of floodplain
   */
  public function coordinatesAsync($coordinates)
  {
    if ($coordinates) {
      foreach ($coordinates as $coordinate) {
        $this->coordinates()->create($coordinate);
      }
    }
  }

  /**
   * Save floodplain images
   */
  public function imagesAsync($images)
  {
    if ($images) {
      foreach ($images as $image) {
        $extension = $image->getClientOriginalExtension();
        $name      = uniqid() . '_' . time() . '.' . $extension;
        $image->move('storage/images/floodplains/', $name);
        $this->floodImages()->create(['name' => $name]);
      }
    }
  }
}
