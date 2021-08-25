<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    //
    public function save(Request $request){
        $furniture = new Furniture();
        $furniture->fill($request->all());
        $furniture->save();
        return $furniture;
    }

    public function display(){
        $furniture = Furniture::all();
        return $furniture;
    }
}
