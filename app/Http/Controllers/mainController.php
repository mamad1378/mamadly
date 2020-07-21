<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BoardController;
use App\category;
use App\user;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index(){
        $categories = CategoryController::index();
        $boards = BoardController::index();
        // $test = $categories;
        // dd($test);
        return view('/main/index' , compact(['categories','boards']));
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
