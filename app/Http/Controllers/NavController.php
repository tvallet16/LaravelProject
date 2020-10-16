<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Statue;


class NavController extends Controller
{
    public function statueListe(){
        $statues=Statue::getAll();
        return view('liste', ['statues' => $statues]);
    }

    public function formAdd (){
        return view('add');
    }
    public function formEdit (Request $request){

        $statue=Statue::getOne($request);
        return view('edit', ['statue' => $statue]);
    }
}
