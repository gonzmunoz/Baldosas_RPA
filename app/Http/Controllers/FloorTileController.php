<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FloorTileModel;

class FloorTileController extends Controller
{
    public function listFloorTiles()
    {
        $_data['floorTiles'] = FloorTileModel::all();
        return view('listFloorTiles', $_data);
    }
}
