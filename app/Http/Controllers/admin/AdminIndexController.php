<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Header;
use Illuminate\Http\Request;

class AdminIndexController extends Controller
{
    
    public function AdminIndexPage()
    {
        $header = Header::select()->first();
        
        return view('admin.adminka', [
            "title" => $header?->title,
            "subTitle" => $header?->subtitle,
            "date" => $header?->date,
        ]);
    }

    public function HomeTitle(Request $request)
    {
        if ($request->isMethod('post')) {

            $header = Header::select()->first();

            // $date = str_replace("/", "-", $request->date);

            // $request->date = substr($date, 0, strpos($date, ' ') ?: null);

            $request->date = date_format(date_create($request->date), "Y-m-d");

            $validated = $request->validate([
                'title' => 'required|max:255|String',
                'subtitle' => 'required|max:255|String',
                "date" => 'required|date',
            ]);

            if ($validated) {
                $header->title = $request->title;
                $header->subtitle = $request->subtitle;
                $header->date = $request->date;
                if($header->save())
                {
                    $request->session()->flash('alert-success-edit-title', 'Title edited.');
                    
                } else {
                    $request->session()->flash('alert-errors-edit-title', 'Title not edited.');
                }
            }
        }
        return redirect()->route('adminka');
    }

}
