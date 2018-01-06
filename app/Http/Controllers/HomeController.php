<?php

namespace App\Http\Controllers;
use App\Kindergartens;
use App\Queue;
use Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function queue_page(){
        return view('pages.queue');
    }
    public function give()
    {
        return view('pages.give.give');
    }

    public function giveStep2()
    {
        return view('pages.give.step2');
    }
    public function spisok(){
        $kinders = Kindergartens::all();
        return view('pages.give.step3',compact('kinders'));
    }
    public function spisok2(){
        $kinders = Kindergartens::all();
        return view('pages.queue',compact('kinders'));
    }
    public function store(Request $r){
        Queue::create(Request::all());
        return view('pages.give.queue');
    }

}
