<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\frontend\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    // the site home page
    public function index(){
        return view('frontend.site.index');
    }

    // the site about page
    public function about(){
        return view('frontend.site.pages.about');
    }

    // the site listings page
    public function listings(){
        return view('frontend.site.listings');
    }

    // the site sell page
    public function sell(){
        return view('frontend.site.to-sell');
    }

    // the site rent page
    public function rent(){
        return view('frontend.site.to-rent');
    }

    // the site contact page
    public function contact(){
        return view('frontend.site.pages.contact');
    }

    // methode to store contact and send email
    public function save_contact(Request $request){

      $data = $request->validate([
         'name' => 'required',
         'email' => 'required',
         'tel' => 'required',
         'subject' => 'required',
         'message' => 'required',
      ]);

       $contact = new Contact();
       $contact->name = $request->name;
       $contact->email = $request->email;
       $contact->tel = $request->tel;
       $contact->subject = $request->subject;
       $contact->message = $request->message;

       $saved = $contact->save();

       if($saved == true){
           // define the admin mail
           $admin_email = 'amsimmoc@amsimmo.com';
           // send email
           Mail::to($admin_email)->send(new ContactMail($data));

         return redirect()->back()->with('success' , 'your message send with success thanks you :) ..');
        }else{
            return redirect()->back()->with('danger' , 'Oops your message not sending plaise try again.');
        }


    }

    // methode to show the listing form frontend
    public function show_listing_form(){
        return view('frontend.site.listing.listing_form');
    }

    // methode to add new listing from frontend to database
    public function save_listing(){
        return ;
    }


}
