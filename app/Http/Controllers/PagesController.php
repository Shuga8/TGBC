<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
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

    public function send(ContactRequest $request)
    {
        $request->validated($request->all());
    }

    public function pastors()
    {

        $data = [
            'title' => 'Our Pastors'
        ];

        return view('pages.pastors')->with($data);
    }

    public function blog()
    {
        $posts = Post::paginate(6);

        $data = [
            'title' => 'Blog',
            'posts' => $posts,
        ];

        return view('posts.index')->with($data);
    }

    public function single($id)
    {

        $post = Post::where('id', $id)->first();

        if ($post->count() == 0) {
            return abort(403, "No such post");
        }

        $data = [
            'title' => strtoupper($post->title),
            'post' => $post
        ];

        return view('posts.single')->with($data);
    }

    public function events()
    {
        $events = Event::paginate(6);

        $data = [
            'title' => 'Events',
            'events' => $events
        ];

        return view('events.index')->with($data);
    }
}
