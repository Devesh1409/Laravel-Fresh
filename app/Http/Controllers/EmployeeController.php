<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
   public function create()
   {
   	 echo "Devesh";
   	 return view('welcome');
   }

   public function display()
   {
      
      $data ="Devesh";
      $a='ITM';
      $b =[1,2,3,'dev','nitin'];
      return view('display',compact('data','a','b'));
   }
}


