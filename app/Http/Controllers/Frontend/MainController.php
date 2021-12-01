<?php

namespace App\Http\Controllers\Frontend;

use App\Contact;
use App\Http\Controllers\Controller;
use App\QoutWeb;
use App\Team;
use Illuminate\Http\Request;
use App\Banner;
use App\Mail\ContactEmail;
use App\Mail\QoutMail;
use Mail;

class MainController extends Controller
{
    public function index()
    {
        $banners= Banner::all();
        return view('frontend.pages.index',compact('banners'));
    }

    public function services()
    {
        return view('frontend.pages.services');
    }

    public function webApp()
    {
        return view('frontend.pages.web');
    }

    public function mobileApp()
    {
        return view('frontend.pages.mobile');
    }

    public function graphicApp()
    {
        return view('frontend.pages.graphic');
    }

    public function team()
    {
        $teams= Team::all();
        return view('frontend.pages.team',compact('teams'));
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function contactUs(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'country' => 'required',
            'project_include' => 'required',
            'message' => 'required',
        ]);

        $contact=new Contact();
        $contact->first_name=$request->first_name;
        $contact->last_name=$request->last_name;
        $contact->email=$request->email;
        $contact->country=$request->country;
        $contact->subject=$request->subject;
        $contact->message=$request->message;
        $contact->save();

        $contact->save();


        $data = [
            'title' => 'Mail from Al-Muhsiy Group',
            'body' => 'Thank you for contacting us'
        ];

        \Mail::to($contact->email)->send(new \App\Mail\ContactEmail($data));

        return back()->with('success','Thanks for contact us, we will contact you soon');

    }

    public function qouteWeb()
    {
        return view('frontend.pages.qoute-website');
    }

    public function contactQouteWeb(Request $request)
    {
        $request->validate([
            'project_type' => 'required',
            'project_target' => 'required',
            'client_target' => 'required',
            'project_include' => 'required',
            'Project_features' => 'required',
            'project_offer' => 'required',
        ]);


        $contact=new QoutWeb();
        $contact->name=$request->name;
        $contact->company_name=$request->company_name;
        $contact->email=$request->email;
        $contact->mobile=$request->mobile;
        $contact->company_do=$request->company_do;
        $contact->website_url=$request->website_url;
        $contact->hosting=$request->hosting;
        $contact->domain=$request->domain;
        $contact->project_deadline=$request->project_deadline;
        $contact->project_budget=$request->project_budget;

        foreach ($request->project_type as $ptype)
        {
            $contact->project_type=$ptype;
        }

        foreach ($request->project_target as $ptarget)
        {
            $contact->project_target=$ptarget;
        }

        foreach ($request->client_target as $ctarget)
        {
            $contact->client_target=$ctarget;
        }

        foreach ($request->project_offer as $poffer)
        {
            $contact->project_offer=$poffer;
        }

        $contact->project_search=$request->project_search;
        $contact->project_uniqueness=$request->project_uniqueness;
        $contact->project_solution=$request->project_solution;
        $contact->address=$request->address;

        foreach ($request->project_include as $pinclude)
        {
            $contact->project_include=$pinclude;
        }

        foreach ($request->Project_features as $pfeatures)
        {
            $contact->Project_features=$pfeatures;;
        }

        $contact->images=$request->images;
        $contact->logo=$request->logo;
        $contact->hosting_domain=$request->hosting_domain;
        $contact->ssl_certificate=$request->ssl_certificate;
        $contact->company_logo=$request->company_logo;
        $contact->project_competitor=$request->project_competitor;
        $contact->project_pick=$request->project_pick;
        $contact->something_missing=$request->something_missing;
        $contact->website_update=$request->website_update;
        $contact->require_update=$request->require_update;
        $contact->project_training=$request->project_training;

        $contact->save();


//        qoute mail
        $data = [
            'title' => 'Mail from Al-Muhsiy Group',
            'body' => 'Thank you for contacting us'
        ];

        \Mail::to($contact->email)->send(new \App\Mail\QoutMail($data));

        return back()->with('success','Thanks for contact us, we will contact you soon');


        return back()->with('success','Thank you for your contact, will contact you back as soon as possible');


    }

    public function qouteMobile()
    {
        return view('frontend.pages.qoute-mobile');
    }

}
