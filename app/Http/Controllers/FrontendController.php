<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Page;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function contact()
    {
        return view('frontend.contact');
    }


    public function contactpost(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'date' => 'required',
            'subject' => 'required',
            'category' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|recaptchav3:contact-us,0.5'


        ]);

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->date = $request->date;
        $contact->subject = $request->subject;
        $contact->category = $request->category;
        $contact->message = $request->message;


        $contact->save();

        return redirect()->back()
            ->with('success', 'Message send successfully.');
    }
<<<<<<< HEAD

    public function showpage($slug)
    {

        $post = Page::where('slug', $slug)->first();

        return view('frontend.page', [
            'post' => $post,
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
=======
>>>>>>> 27330137e9b415e4b4ec0294de1b27f13403f94e
}
