<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    //
    public $categories=[
        ["phone 1", "watches 1","sport_wear 1","other" ],
        ["phone 1", "watches 1","sport_wear 1","other" ],
        ["phone 1", "watches 1","sport_wear 1","other" ],
        ];
   public $product=[
            1=>['id'=>1,'name'=>"name 1",'price'=>100],
            2=>['id'=>2,'name'=>"name2",'price'=>200],
            3=>['id'=>3,'name'=>"name3",'price'=>300],
            4=>['id'=>4,'name'=>"name4",'price'=>400],
            5=>['id'=>5,'name'=>"name5",'price'=>500],
            6=>['id'=>6,'name'=>"name6",'price'=>600],
            7=>['id'=>7,'name'=>"name7",'price'=>700],
            8=>['id'=>8,'name'=>"name8",'price'=>800],
            9=>['id'=>9,'name'=>"name9",'price'=>900],
            10=>['id'=>10,'name'=>"name10",'price'=>1000],
            11=>['id'=>11,'name'=>"name11",'price'=>1100],
            12=>['id'=>12,'name'=>"name12",'price'=>1200],
        ];
    
    public function categoriess()
    {
        return view('homepage',["catego"=>$this->categories],["prod"=>$this->product]);
    }
    public function product($id)
    {

        return view("productdetails",["pro"=>$this->product[$id]]);
    }
}
