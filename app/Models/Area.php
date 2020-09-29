<?php

namespace App\Models;

// use HasManySyncable;

use App\Model\Relations\HasManySyncable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
  use HasFactory;

  protected $table = 'areas';
  protected $fillable = ['name', 'description'];

  /**
   * Overrides the default Eloquent hasMany relationship to return a HasManySyncable.
   *
   * {@inheritDoc}

   */
  public function hasMany($related, $foreignKey = null, $localKey = null)
  {
    $instance = $this->newRelatedInstance($related);

    $foreignKey = $foreignKey ?: $this->getForeignKey();

    $localKey = $localKey ?: $this->getKeyName();

    return new HasManySyncable(
      $instance->newQuery(),
      $this,
      $instance->getTable() . '.' . $foreignKey,
      $localKey
    );
  }

  /**
   * Get the coordinates for the area.
   */
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
}
