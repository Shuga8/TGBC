<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SubscriptionRequest;
use App\Jobs\NewsletterSubscriptionJob;
use App\Models\Subscriber;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\DB;

class SubscribersController extends Controller
{
    use HttpResponses;
    public function index(SubscriptionRequest $request)
    {
        $data = [
            'email' => $request->email
        ];

        dispatch(new NewsletterSubscriptionJob($data));

        try {

            DB::beginTransaction();

            Subscriber::create($data);

            DB::commit();

            return $this->success(['success' => 'Subscription successful']);
        } catch (\Throwable $th) {

            DB::rollBack();
            return $this->error(['error' => $th->getMessage], null, $th->getCode ?: 406);
        }
    }
}
