<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index (){
    	$hw='Hello, world!';
    	$ms='This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.';
    	return view ('index')->with(['hw'=>$hw, 'ms'=>$ms]);
    }
}
