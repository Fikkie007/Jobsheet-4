<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsPage extends Controller
{
    public function product1(){
        echo'<a href="https://www.educastudio.com/category/marbel-edu-games">Product Marbel 1</a>';
    }
    public function product2(){
        echo'<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">Product Marbel 2</a>';
    }
    //
}
