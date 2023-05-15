<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;

class AdminSocialController extends Controller
{
    public function index(){

        $socials = Social::select()->paginate(15);

        return view("admin.socialList", [
            "socials" => $socials,
        ]);
    }

    public function addPage(){

        return view("admin.socialAdd");
    }

    public function add(Request $request){

        $social = new Social;

        $social->name = $request->name;
        $social->icon = $request->icon;
        $social->url = $request->url;

        if($social->save())
        {
            $request->session()->flash('alert-success', 'Social added.');
        } else {
            $request->session()->flash('alert-errors', 'Social not added.');
        }

        return redirect()->route("social");
    }

    public function editPage($id){

        $social = Social::find($id);

        return view("admin.socialEdit", [
            "id" => $social?->id,
            "name" => $social?->name,
            "icon" => $social?->icon,
            "url" => $social?->url,
        ]);
    }

    public function edit(Request $request){

        $social = Social::find($request->id);

        $social->name = $request->name;
        $social->icon = $request->icon;
        $social->url = $request->url;

        if($social->save())
        {
            $request->session()->flash('alert-success', 'Social edited.');
        } else {
            $request->session()->flash('alert-errors', 'Social not edited.');
        }

        return redirect()->route("socialEditPage", ["id" => $request->id]);
    }

    public function delete(Request $request, $id){

        $socials = Social::find($id);
        if($socials->delete())
        {   
            $request->session()->flash('alert-success', 'Social deleted');
        } else {
            $request->session()->flash('alert-errors', 'Social not deleted');
        }

        return redirect()->route('social');
    }
}
