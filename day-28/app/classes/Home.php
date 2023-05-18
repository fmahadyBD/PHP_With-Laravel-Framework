<?php


namespace App\classes;


class Home
{
    public function index(){

    return view('home');

} public  function about(){
    return view('about');
}
public  function service(){
    return view('service');

}

}