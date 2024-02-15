<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SubscriptionRequest;

class SubscribersController extends Controller
{
    public function index(SubscriptionRequest $request)
    {

        $request->validated($request->all());

        return response()->json(['success' => 'You can continue']);
    }
}
