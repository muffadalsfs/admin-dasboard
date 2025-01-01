<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class FormController extends Controller
{
    function Tool(Request $request){
        $request->validate([
           
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048', 
        ]);
        $path=$request->file('file')->store('public','public');
        $imagarray=explode('/',$path);
        $image=$imagarray[1];
        $to=new Customer();
        $to->name=$request->name;
        $to->path=$image;
        $to->city=$request->city;
       
        $to->save();
        return redirect('admin');

    }
}
