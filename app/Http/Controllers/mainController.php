<?php

namespace App\Http\Controllers;

use App\category;
use App\user;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index(){
        $user_id = '100';
        $categories = category::where('user_id' , $user_id)->get();
        // $test = $categories;
        // dd($test);
        return view('/main/index' , compact('categories'));
    }
    public function about(){
        return view('/main/about');
    }
    public function test(){
        // $test = factory(user::class, 20)->create();
        // $test = factory(category::class, 50)->create();
        // $test = \App\user::inRandomOrder()->select('id')->limit('1')->get()->first()->id;



        // dd($test);
            // return view('/main/about');
    }
}
