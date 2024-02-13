<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {

        $events = Event::latest()->take(3)->get();

        $data = [
            'title' => 'Home',
            'events' => $events,
        ];

        return view('pages.index')->with($data);
    }
}
