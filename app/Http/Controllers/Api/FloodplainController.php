<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FloodplainRequest;
use App\Http\Resources\Floodplain as FloodplainResources;
use App\Models\Floodplain;
use Illuminate\Support\Facades\DB;

class FloodplainController extends Controller
{
  protected $floodplain;

  public function __construct(Floodplain $floodplain)
  {
    $this->floodplain = $floodplain;
  }

  public function index()
  {
    return FloodplainResources::collection(Floodplain::all());
  }


  public function store(FloodplainRequest $request)
  {
    DB::beginTransaction();
    try {
      $floodplain = $this->floodplain->create([
        'name' => $request->name,
        'description' => $request->description
      ]);

      $floodplain->coordinatesAsync($request->coordinates);
      $floodplain->imagesAsync($request->file('images'));

      DB::commit();
      return new FloodplainResources($floodplain);
    } catch (\Exception $exception) {
      DB::rollBack();
      return response()->json([
        'message' => $exception->getMessage(),
      ], 400);
    }
  }
}
