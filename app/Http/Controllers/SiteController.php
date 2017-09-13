<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function about(){
        $ChineseName = 'wangchi';
        $EnglishName = 'Gerry Amily';
        return view('sites.about',compact('ChineseName','EnglishName'));
    }

    public function contact(){

//        $people = ['Taylor Otwell','Jeffray Way','Happy Peter'];
        $people = [];
        $first = 'Gerry';
        $last = 'Amily';
        return view('sites.contact',compact('first','last','people'));
    }
}
