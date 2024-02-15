<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SubscriptionRequest;

class SubscribersController extends Controller
{
    public function index(SubscriptionRequest $request)
    {

        if ($request->validated($request->all())) {
            return back()->with('message', 'continue');
        } else {
            return back()->with('message', 'Error');
        }
    }
}
