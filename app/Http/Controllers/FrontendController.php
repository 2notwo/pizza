<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class FrontendController extends Controller
{
    public function index(){

        $pizzas = Pizza::latest()->get();
        return view('frontpage',compact('pizzas'));
    }

    public function show($id){
        $pizza = Pizza::find($id);
        return view('show', compact('pizza'));

    }

    public function store(Request $request){
        if ($request->small_pizza==0 && $request->medium_pizza==0 && $request->large_pizza==0){
            return;
        }
        dd($request->all());
    }
}

