<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about(){
        $name = 'Peter Nguyen';
        $people = ['Diep Phuong', 'Tho Con', 'Diep Diep'];
        return view('pages.about', compact('name','people'));
    }

    public function contact(){
        return view('pages.contact');
    }
}
