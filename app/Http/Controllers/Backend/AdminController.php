<?php

namespace App\Http\Controllers\Backend;

use App\Contact;
use App\Http\Controllers\Controller;
use App\QoutWeb;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Auth;
use File;
use App\Banner;
use App\Team;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.pages.index');
    }

    public function banner()
    {
        $banners=Banner::all();
        return view('backend.pages.banner',compact('banners'));
    }

    public function editBanner(Request $request,$id)
    {
        $banner=Banner::find($id);
        return view('backend.pages.banner-edit',compact('banner'));
    }

    public function updateBanner(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'file' => 'required',
        ]);

        $banner= Banner::find($id);
        $banner->name= $request->name;

        if ($request->hasFile('file')) {

            $image = $request->file('file');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/backend/img/banner');
            $image->move($destinationPath, $name);
            $banner->file=$name;
        }

        $banner->save();
        return redirect()->route('banner')->with('success','you successfully added banner');
    }

    public function addBanner(Request  $request)
    {
        $request->validate([
            'name' => 'required',
            'file' => 'required',
        ]);

        $banner= new Banner();
        $banner->name= $request->name;

        if ($request->hasFile('file')) {

            $image = $request->file('file');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/backend/img/banner');
            $image->move($destinationPath, $name);
            $banner->file=$name;
        }

        $banner->save();
        return back()->with('success','you successfully added banner');

    }

    public function deleteBanner(Request $request,$id)
    {
        $banner= Banner::find($id);
        $banner->delete();

        $img_path = 'backend/img/banner/'.$banner->file;

        if (File::exists($img_path)) {
            File::delete($img_path);
        }

        return back()->with('success','Banner Deleted Successfully');
    }

//    admin team
    public function adTeam()
    {
        $teams=Team::all();
        return view('backend.pages.team',compact('teams'));
    }

    public function addTeam()
    {
        return view('backend.pages.addteam');
    }

    public function createTeam(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'post' => 'required',
            'file' => 'required',
            'description' => 'required',
        ]);

        $team= new Team();
        $team->name=$request->name;
        $team->post=$request->post;
        $team->description=$request->description;

        if ($request->hasFile('file')) {

            $image = $request->file('file');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/backend/img/team');
            $image->move($destinationPath, $name);
            $team->file=$name;
        }

        $team->save();
        return redirect()->route('admin.team')->with('success','Added Team member Successfully');

    }

    public function editTeam($id)
    {
        $team=Team::find($id);

        return view('backend.pages.edit-team',compact('team'));
    }

    public function updateTeam(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'post' => 'required',
            'file' => 'required',
            'description' => 'required',
        ]);

        $team=Team::find($id);
        $team->name=$request->name;
        $team->post=$request->post;
        $team->description=$request->description;

        if ($request->hasFile('file')) {

            $image = $request->file('file');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/backend/img/team');
            $image->move($destinationPath, $name);
            $team->file=$name;
        }

        $team->save();
        return redirect()->route('admin.team')->with('success','Updated Team member Successfully');

    }

    public function deleteTeam($id)
    {
        $team = Team::find($id);
        $team->delete();

        $img_path = 'backend/img/team/'.$team->file;

        if (File::exists($img_path)) {
            File::delete($img_path);
        }

        return back()->with('success','Team Player Deleted Successfully');
    }

//    contact emails
    public function contactEmail()
    {
        $contacts=Contact::all();
        return view('backend.pages.contactemail',compact('contacts'));
    }

    public function deleteContactEmail($id)
    {
        $contact=Contact::find($id);
        $contact->delete();
        return back()->with('success','successfully deleted user mail');
    }

//    request website email
    public function webEmail()
    {
        $webmail=QoutWeb::all();
        return view('backend.pages.webmail',compact('webmail'));
    }

    public function deleteWebEmail($id)
    {
        $webemail=QoutWeb::find($id);
        $webemail->delete();
        return back()->with('success','successfully deleted Request website mail');
    }




    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');

    }

}
