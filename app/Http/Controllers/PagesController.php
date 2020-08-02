<?php

namespace App\Http\Controllers;

class PagesController extends Controller{
    public function getIndex(){
        return view('pages/welcome');
    }

    public function getCV(){
        return view('pages/cv');
    }

    public function getPortfolio(){
        return view('pages/portfolio');
    }
}