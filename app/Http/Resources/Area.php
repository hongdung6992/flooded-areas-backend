<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Area extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request)
  {
    return [
      'id'          => $this->id,
      'name'        => $this->name,
      'description' => $this->description,
      'created_at'  => $this->created_at,
      'updated_at'  => $this->updated_at,
      'coords'      => $this->coordinates,
      'images'      => $this->images()
    ];
  }

  public function images()
  {
    $images = [];
    foreach ($this->floodImages as $image) {
      array_push($images, [
        'id' => $image->id,
        'path' => asset('storage/images/flood/' . $image->name)
      ]);
    }
    return $images;
  }
}
