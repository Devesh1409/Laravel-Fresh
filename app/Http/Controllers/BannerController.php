<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;

class BannerController extends Controller
{
    public function create()
    {
    	// echo "working";
    	return view('banner/create');
    }

    public function save(Request $data)
    {
    	// echo "save";
        // echo "<pre>";
        //  print_r($data->all());
    	$a =new Banner;
    	$a->name = $data->name;
    	$a->city = $data->city;
        $a->address = $data->address;
        $a->college = $data->college;
        $a->gender = $data->gender;
        $a->qualification =  implode(",",$data->qualification);
        $a->phone_number = $data->phone_number;

    	$a->save();
        
    	if($a)
    	{
    		return redirect('banner/create');
    	}

    }
// 
    public function display()
    {
    	// echo "dislay";
    	$data = Banner::all();
    	// echo "<pre>";
    	// print_r($data);
    	return view('banner.display',compact('data'));
    }

    public function show($id)
    {
    	// echo $id;
    	$data = Banner::find($id);
    	// echo "<pre>";
    	// print_r($data);
    	return view('banner.show',compact('data'));
    }

    public function delete($id)
    {
    	// echo $id;
    	$data = Banner::find($id);
    	$deleted = $data->delete();
    	if($deleted)
    	{
    		return redirect('banner/display')->with('message','Data Deleted Successfully');

    	}
    	// echo "<pre>";
    	// print_r($data);
        // return view('curd.show',compact('data'));
    }

    public function edit($id)
    {
    	// echo $id;
    	$data = Banner::find($id);
    	// echo "<pre>";
    	// print_r($data);
    	return view('banner/edit',compact('data'));
    }

    public function update(Request $a)
    {
    	// echo "<pre>";
    	// print_r($a->all());
    	$data = Banner::find($a->id);
    	$data->name = $a->name;
        $data->city = $a->city;
        $data->address = $a->address;
        $data->college = $a->college;
        $data->gender = $a->gender;
        $data->qualification =  implode(',',$a->qualification);
        $data->phone_number = $a->phone_number;


    	$data->save();
    	if($data)
    	{
    		return redirect('banner/display')->with('message','Data Updated Successfully');
    	}
    }
}
