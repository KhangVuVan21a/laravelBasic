<?php
namespace App\Http\Controllers;

use Facade\FlareClient\View;

class PagesController extends Controller{
    public function getIndex(){
        return View("welcome");
    }
    public function getAbout(){
        return view("about");
    }
    public function getContact(){
        $name= "Khang";
        $email= "khang21a@gmail.com";
        $data = [];
        $data["name"]="khangVu";
        $data["email"]="khang7bdc@gmail.com";
        return view('contact')->with("name",$name)->with("email",$email)->with("data",$data);
    }
}
