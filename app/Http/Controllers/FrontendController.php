<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function index(){
       return view('Frontend.home.home');
   }
   public function contact(){
       return view('Frontend.contact.contact');
   }
   public function about(){
       return view('Frontend.about.about');
   } public function test2(){
       return view('test2');
   }
}
