<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AdminAboutController extends Controller
{
    public function HomeAbout(){

        $about = About::find(1);

        return view("admin.about", [
            "about" => $about,
        ]);
    }

    public function AboutUpdate(Request $request){
        
        $aboutEdit = About::Find(1);

        $aboutEdit->title = $request->title;
        $aboutEdit->text = $request->text;

        if ($aboutEdit->save()) {
            $request->session()->flash('alert-succes-about', 'About edited.');
        } else {
            $request->session()->flash('alert-errors-about', 'About not edited.');
        }

        return redirect()->route("homeAbout");
    }
}
