<?php

namespace App\Http\Controllers;

use App\Models\EmailSubscriber;
use Illuminate\Http\Request;

class EmailSubscriberController extends Controller
{
    public function index()
    {
        $subscribers = EmailSubscriber::all();
        return view('admin.subscribers', ['subscribers' => $subscribers]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:email_subscribers,email',
        ]);
    
        $subscriber = new EmailSubscriber();
        $subscriber->email = $request->input('email');
        $subscriber->save();
    
        // Redirect back to the same page (previous page)
        return back()->with('success', 'Subscriber added successfully.');
    }

    public function destroy($id)
    {
        $subscriber = EmailSubscriber::findOrFail($id);
        $subscriber->delete();

        return redirect()->route('subscribers.index')->with('success', 'Subscriber deleted successfully.');
    }
}
