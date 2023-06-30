<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web_Controller extends Controller
{
    public function home(){
		return view('home_content');
	}
 
	public function about(){
		return view('about');
	}
	public function resume(){
		return view('resume_new');
	}
	public function portofolio(){
		return view('portofolio');
	}
	public function web_bkpsdm(){
		return view('portofolio/web_bkpsdm');
	}
	public function sigendis(){
		return view('portofolio/sigendis');
	}
	public function space_shooter(){
		return view('portofolio/space_shooter');
	}

}
