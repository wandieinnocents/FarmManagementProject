<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function animals(){

    return view('pages.animals');

    }
    public function sickanimals(){

    return view('pages.sickanimals');

    }
    
    public function farmoperators(){

      return view('pages.farmoperators');

    }





}
