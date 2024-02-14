<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {

        $events = Event::latest()->take(3)->get();

        $posts = Post::latest()->take(2)->get();

        $data = [
            'title' => 'Home',
            'events' => $events,
            'posts' => $posts
        ];

        return view('pages.index')->with($data);
    }

    public function general_overseer()
    {
        $data = [
            'title' => 'General Overseer',
        ];

        return view('pages.general_overseer')->with($data);
    }

    public function mummy_go()
    {
        $data = [
            'title' => 'Mummy G.O',
        ];

        return view('pages.mummy_go')->with($data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us'
        ];

        return view('pages.contact')->with($data);
    }
}
