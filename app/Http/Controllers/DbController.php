<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DbController extends Controller
{
    public function insert()
    {
    	// echo "DB";
    	$data= DB::table('students')->insert(['name'=>'Ram','city'=>'Gwalior','phone_number'=>'9563214577','college'=>'ITM']);
    	echo $data;
    }
    public function display()
    {
    	// $data =DB::table('students')->get();
        // $data=DB::table('students')->orderBy('id','desc')->get();
        // $data=DB::table('students')->where(['id'=>3])->get();
        // $data=DB::table('students')->where(['id'=>3])->first();
        // $data=DB::table('students')->count();
        // $data=DB::table('students')->pluck('name');
     //    $data=DB::table('students')->select('name','email')->get();
     //    $data=DB::table('students')->select('name','email as email_id')->get();
    	echo "<pre>";
    	print_r($data);
    }
    public function update()
    {
    	echo $data=DB::table('students')->where(['id'=>3])->update(['name'=>'Nitin ', 'city'=>'Gwalior','phone_number'=>'9009946102','college'=>'MITS']);
    }
    public function delete()
    {
    	echo $data=DB::table('students')->where(['id'=>2])->delete();
    }
}
