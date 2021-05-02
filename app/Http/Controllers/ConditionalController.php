<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConditionalController extends Controller
{
    public function aif()
    {
    	$name ="Pninfosys";
    	return view("if",compact('name'));
    }

    public function aelse()
    {
    	$name ="pn infosys";
    	return view("else",compact('name'));
    }

    public function aelseif()
    {
    	$name ="pn";
    	return view("if",compact('name'));
    }

    public function aempty()
    {
        $name ="";
        return view("empty",compact('name'));
    }
}
