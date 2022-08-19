<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function homepage()
    {
        date_default_timezone_set('Europe/Moscow');
        $ip = $_SERVER['REMOTE_ADDR'];
        if ($ip != '193.41.78.112') {
            $time = date("Y-m-d H:i:s");
            DB::table('visitors')->insert(
                ['ip' => $ip, 'page' => 'homepage', 'time' => $time]
            );
        }
        return view('pages/homepage');
    }

    public function about()
    {
        date_default_timezone_set('Europe/Moscow');
        $ip = $_SERVER['REMOTE_ADDR'];
        if ($ip != '193.41.78.112') {
            $time = date("Y-m-d H:i:s");
            DB::table('visitors')->insert(
                ['ip' => $ip, 'page' => 'about', 'time' => $time]
            );
        }
        return view('pages/about');
    }

    public function portfolio()
    {
        date_default_timezone_set('Europe/Moscow');
        $ip = $_SERVER['REMOTE_ADDR'];
        if ($ip != '193.41.78.112') {
            $time = date("Y-m-d H:i:s");
            DB::table('visitors')->insert(
                ['ip' => $ip, 'page' => 'portfolio', 'time' => $time]
            );
        }
        return view('pages/portfolio');
    }

    public function contact()
    {
        date_default_timezone_set('Europe/Moscow');
        $ip = $_SERVER['REMOTE_ADDR'];
        if ($ip != '193.41.78.112') {
            $time = date("Y-m-d H:i:s");
            DB::table('visitors')->insert(
                ['ip' => $ip, 'page' => 'contact', 'time' => $time]
            );
        }
        return view('pages/contact');
    }

    public function siteCard()
    {
        date_default_timezone_set('Europe/Moscow');
        $ip = $_SERVER['REMOTE_ADDR'];
        if ($ip != '193.41.78.112') {
            $time = date("Y-m-d H:i:s");
            DB::table('visitors')->insert(
                ['ip' => $ip, 'page' => 'siteCard', 'time' => $time]
            );
        }
        return view('pages/siteCard');
    }

    public function CSGO()
    {
        date_default_timezone_set('Europe/Moscow');
        $ip = $_SERVER['REMOTE_ADDR'];
        if ($ip != '193.41.78.112') {
            $time = date("Y-m-d H:i:s");
            DB::table('visitors')->insert(
                ['ip' => $ip, 'page' => 'CSGO', 'time' => $time]
            );
        }
        return view('pages/CSGO');
    }

    public function salaryCalculator()
    {
        date_default_timezone_set('Europe/Moscow');
        $ip = $_SERVER['REMOTE_ADDR'];
        if ($ip != '193.41.78.112') {
            $time = date("Y-m-d H:i:s");
            DB::table('visitors')->insert(
                ['ip' => $ip, 'page' => 'salaryCalculator', 'time' => $time]
            );
        }
        return view('pages/salaryCalculator');
    }

    public function test()
    {
        date_default_timezone_set('Europe/Moscow');
        $ip = $_SERVER['REMOTE_ADDR'];
        if ($ip != '193.41.78.112') {
            $time = date("Y-m-d H:i:s");
            DB::table('visitors')->insert(
                ['ip' => $ip, 'page' => 'test', 'time' => $time]
            );
        }
        return view('pages/test');
    }
}
