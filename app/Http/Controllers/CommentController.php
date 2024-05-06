<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use DB;   

class CommentController extends Controller
{
    //
    public function index(){
        return view("detail");
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:32',
            'email' => 'required|email',
            'message' => 'required|string|required|max:255'
        ]);
        $userComment = new Comment();
        $userComment->name = $request->input('name');
        $userComment->email = $request->input('email');
        $userComment->message = $request->input('message');
        $userComment->save();
        return redirect()->back()->with('success');
    }

    public function get_comment(){
        $comment = DB::table('comments')->get();
        return view('detail', compact('comment'));
    }
}
