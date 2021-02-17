<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\resources\views\login;
use Illuminate\Support\Facades\Input;

class homeController extends Controller
{
    public function testInsert(){
        // \DB::table('user')->insert(
        //     ['name' => 'jordi']
        // );
        return view('landingPage', ['name' => 'user']);
    }
}
