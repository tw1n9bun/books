<?php

namespace App\Http\Controllers;

use App\Models\Contact2;

use Illuminate\Http\Request;

class MainController extends Controller {

    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }
    public function news(){
        $reviews = new Contact2();
        return view('register',['register'=>$reviews->all()]);
    }
    public function review_one($id) {
        $reviews = new Contact2();
        return view('register_one',['data'=> $reviews->find($id)]);
    }

    public function review() {
        $reviews = new Contact2();

        return view('review',['reviews' =>$reviews->all()]);
    }

    public function review_check(Request $request) {
        $valid = $request->validate([
            'email'=> 'required|min:4|max:100',
            'subject'=> 'required|min:4|max:100',
            'message'=> 'required|min:4|max:500'
        ]);

        $review = new Contact2();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');


        $review->save();

        return redirect()->route('review');
    }

    public function register_one($id){
        $contact = new Contact2();
        return view('register_one',['data'=> $contact->find($id)]);
    }
}
