<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function homepage()
    {
        $this->ip_todatabase("homepage");
        return view('pages/homepage');
    }

    public function about()
    {
        $this->ip_todatabase("about");
        return view('pages/about');
    }

    public function portfolio()
    {
        $this->ip_todatabase("portfolio");
        return view('pages/portfolio');
    }

    public function contact()
    {
        $this->ip_todatabase("contact");
        return view('pages/contact');
    }

    public function siteCard()
    {
        $this->ip_todatabase("siteCard");
        return view('pages/siteCard');
    }

    public function shortener()
    {
        $this->ip_todatabase("shortener");
        return view('pages/shortener');
    }
    public function CSGO()
    {
        $this->ip_todatabase("CSGO");
        return view('pages/CSGO');
    }

    public function salaryCalculator()
    {
        $this->ip_todatabase("salaryCalculator");
        return view('pages/salaryCalculator');
    }

    public function tgBot()
    {
        $this->ip_todatabase("tgBot");
        return view('pages/tgBot');
    }
    public function jupyterHub()
    {
        $this->ip_todatabase("jupyterHub");
        return view('pages/jupyterHub');
    }

    private function ip_todatabase($a)
    {
        date_default_timezone_set('Europe/Moscow');
        $ip = $_SERVER['REMOTE_ADDR'];
        $time = date("Y-m-d H:i:s");
        DB::table('visitors')->insert(
            ['ip' => $ip, 'page' => $a, 'time' => $time]
        );
    }
}
