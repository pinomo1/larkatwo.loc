<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\Artisan;
use App\Models\Category;

class IndexController extends Controller
{
    
    public function Index()
    {

        $header = Header::select('title', 'subtitle', 'date')->Get();
        $categorys = Category::with("post")->select("id", "category")->orderBy("id", "DESC")->get();
        $artisans = Artisan::with("getCategorys")->orderBy("id", "DESC")->take(4)->get();


        return view('Site.index', [
            'header' => $header,
            'categorys' => $categorys,
            'artisans' => $artisans,
        ]);
    }

}
