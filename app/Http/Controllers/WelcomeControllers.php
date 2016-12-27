<?php
/**
 * Created by PhpStorm.
 * User: tuyenbv
 * Date: 01-Jun-16
 * Time: 6:09 PM
 */

namespace App\Http\Controllers;


class WelcomeControllers extends Controller {
    function index(){
        echo "hello world";
    }
    function contact(){
       return view('contact',[
           'name'=>'Jame',
           'age'=>'18'
       ]);
    }
    function about(){
        return view('about');
    }
}