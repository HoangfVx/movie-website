<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DB;

class DemoController extends Controller
{

    public function demo(){

        $tmdb_id = 436270; //Black Adam (2022) Movie TMDB ID

        $data = Http::asJson()
            ->get(config('services.tmdb.endpoint').'movie/'.$tmdb_id. '?api_key='.config('services.tmdb.api'));
        $comment = DB::table('comments')->get();    
        return view('detail',compact(['data', 'comment']));
    }

    public function get_comment(){
        $comment = DB::table('comments')->get();
        return view('detail', compact('comment'));
    }
}
