<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage()
    {
        return view('pages/homepage');
    }

    public function about()
    {
        return view('pages/about');
    }

    public function portfolio()
    {
        return view('pages/portfolio');
    }

    public function contact()
    {
        return view('pages/contact');
    }

    public function siteCard()
    {
        return view('pages/siteCard');
    }

    public function CSGO()
    {
        return view('pages/CSGO');
    }

    public function salaryCalculator()
    {
        return view('pages/salaryCalculator');
    }
}
