<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller

{
    public function index()
    {
        return view('contact');
    }

    // استلام البيانات وتخزينها
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => ['required','string','max:255'],
            'email'   => ['required','email','max:255'],
            'message' => ['required','string','min:10'],
            'subject' => ['required','string','min:10'],
        ]);

        // Contact::create([
        //     'name'    => $request->name,
        //     'email'   => $request->email,
        //     'subject' => $request->subject,
        //     'message' => $request->message,
        // ]);

        // تأكدي إن موديل Contact فيه fillable للأعمدة دي
        Contact::create($data);

        return redirect()->back()->with('success', 'Done');
    }
}
