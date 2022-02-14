<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FloorTileModel;

class MainController extends Controller
{
    public function index()
    {
        $_data["floorTiles"] = FloorTileModel::all();
        return view('index', $_data);
    }
}
