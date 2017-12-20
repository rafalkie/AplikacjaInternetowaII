<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact(){

    	return 'To jest strona kontakt';
    }

    public function about(){

    	return 'To jest strona o Nas';
    }
}
