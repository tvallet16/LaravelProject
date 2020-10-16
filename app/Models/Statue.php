<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Statue;
use Illuminate\Support\Facades\DB;


class Statue extends Model
{
    use HasFactory;
    public static function getAll(){
        $statues = DB::table('statues')->select('*')->get();
        return $statues;
    }

    public static function getOne($request){
        $statue = Statue::find($request->id);
        return $statue;
    }

    public static function addOne($request){
        $statue = new Statue;
        $statue->name= $request->name;
        $statue->artist= $request->artist;
        $statue->origin= $request->origin;
        $statue->date= $request->date;
        $statue->selling_price=$request->selling_price ;
        $statue->save();
    }
    public static function deleteOne($request){
        Statue::destroy($request->id);
        return ;
    }

    public static function updateOne($request){
        $statue = Statue::find($request->id);
        $statue->name= $request->name;
        $statue->artist= $request->artist;
        $statue->origin= $request->origin;
        $statue->date= $request->date;
        $statue->selling_price=$request->selling_price;
        $statue->save();
        return ;
    }
}
