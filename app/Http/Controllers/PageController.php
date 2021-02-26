<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller {
    public function index(){
        echo"Welcome";
    }

    public function about(){
        echo"1941720079";
        echo"Fikkie Akbar H";

    }

    public function articles($id){
        echo "Article Pages with ID {id}".$id;
    }
}