<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    public function create()
    {
    	
        // echo "working";
    	return view('image/create');
    }

    public function save(Request $a)
    {
    	$this->validate($a,[
        "name"=>"required|max:20|min:3|",
        "image"=>"required",    

        ]);
        // print_r($a->all());
    	$file = $a->file('image');
    	// dd($file);
    	// exit;


    	$filename = 'image'.time().'.'.$a->image->extension();
    	// dd($filename);
    	// exit;

    	$file->move("upload/",$filename);

    	$data = new Department;
    	$data->name = $a->name;
    	$data->image = $filename;
    	$data->save();
    }

      public function display()
    {
        // echo "dislay";
        $data = Department::all();
        // echo "<pre>";
        // print_r($data);
        return view('image/display',compact('data'));
    }
     public function delete($id)
    {
      // echo $id;
      $data = Department::find($id);
      $deleted = $data->delete();
      if($deleted)
      {
        return redirect('image/display')->with('message','Data Deleted Successfully');

      }
      // echo "<pre>";
      // print_r($data);
        // return view('curd.show',compact('data'));
    }

     public function edit($id)
    {
        // echo $id;
        $data = Department::find($id);
        // echo "<pre>";
        // print_r($data);
        return view('image/edit',compact('data'));
    }
 public function update(Request $a)
      {
      //    echo '<pre>';
      //    print_r($a->all());

        if ($a->hasFile('image')) 
        {
        
         $file = $a->file('image');
        // dd($file);
        // exit;
        $filename = 'image'. time().'.'.$a->image->extension();
            // dd($filename);
            // exit;

        $file->move("upload/",$filename);
         //dd($file);
         //exit;


        $data = Department::find($a->id);
        $data->name = $a->name;
        $data->image = $filename;
        $data->save();

        }
        else
        {

        $data = Department::find($a->id);
        // $data->name = $a->name;
        // $data->image = $a->image;
        $data->name = $a->name;
        // $data->image = $filename;
        $data->save();

        if ($a) 
        {
            return redirect('image/display')->with('message','data successfully updated');
        }


        }

        $data->save();

        if($data)
        {
            return redirect('image/display')->with('message','data successfully updated');
        }
      }

}