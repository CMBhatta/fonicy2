<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function service(){
        return view('service');
    }

    public function about(){
        return view('about');
    }

    public function project(){
        return view('project');
    }

    public function testimonial(){
        return view('testimonial');
    }

    public function contact(){
        return view('contact');
    }

    public function submit(Request $request){
        //dd('Submit method called');
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required|digits:10',
            'email' => 'required|email',
            'message' => 'required'
        ], [
            'name.required' => 'name is required'
        ]);

        $input = $request->all();
        Blog::create($input);
        return redirect()->route('contact')->with('success', 'Form submitted successfully!');
    }
}
