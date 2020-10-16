<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statue;


class ActionController extends Controller
{
    public function addOne(Request $request){
        Statue::addOne($request);
        return redirect('/statue');

    }

    public function deleteOne(Request $request){
        Statue::deleteOne($request);
        return redirect('/statue');

    }

    public function update(Request $request){
        Statue::updateOne($request);
        return redirect('/statue');

    }
}
