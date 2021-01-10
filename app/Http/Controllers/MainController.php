<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Headlines;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index(){
        $titles = Headlines::all();
        return view("index",compact('titles'));
    }

    public function insert(Request $req){
    if ($req->isMethod('post')){  
        $title = $req ->input('title');
        //if($title)長度>0才新增
        $data = new Headlines;
        $data ->title = $title;
        $data ->save();
        }
        return redirect("/");
    }

    public function delete($id){
        $data = Headlines::find($id);
        $data->delete();
        return redirect('/');
     }

    public function logout(){
        Auth::logout();
        return redirect("/");
    }
}

