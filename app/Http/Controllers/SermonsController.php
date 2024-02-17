<?php

namespace App\Http\Controllers;

use App\Models\Sermons;
use Illuminate\Http\Request;

class SermonsController extends Controller
{
    public function index()
    {
        $sermons  = Sermons::paginate(6);

        $data = [
            'title' => 'Sermons',
            'sermons' => $sermons
        ];

        return view('sermons.index')->with($data);
    }
}
