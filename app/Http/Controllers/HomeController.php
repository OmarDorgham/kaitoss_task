<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMailRequest;
use App\Jobs\SendMailsJob;
use App\Models\User;

class HomeController extends Controller
{
    public function sendMails(SendMailRequest $request)
    {
        $message = $request->only('subject', 'body');

        $emails = User::chunk(1, function ($data) use ($message) {
            $this->dispatch(new SendMailsJob($data, $message));
        });
        return redirect()->back()->with('success', 'The Email will send in background now');
    }
}
