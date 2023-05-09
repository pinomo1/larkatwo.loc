<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Artisan;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function PostIndex()
    {

        $categorys = Category::with("post")->select("id", "category")->orderBy("id", "DESC")->get();
        $artisans = Artisan::with("getCategorys")->orderBy("id", "DESC")->paginate(15);

        Paginator::useBootstrap();

        return view('Site.post',[
            'categorys' => $categorys,
            'artisans' => $artisans,
        ]);
    }

    public function PostCategory($id)
    {
        $category = Category::with("post")->where('id', $id)->get()[0];
        $artisans = Artisan::with("getCategorys")->where("category_id", $id)->orderBy("id", "DESC")->paginate(15);
        Paginator::useBootstrap();
        return view('Site.category',[
            'category' => $category,
            'artisans' => $artisans,
        ]);
    }

    public function PostUser($id)
    {
        $artisans = Artisan::with("getCategorys")->where("user_id", $id)->orderBy("id", "DESC")->paginate(15);
        $user = User::find($id);
        Paginator::useBootstrap();
        return view('Site.user',[
            'user' => $user,
            'artisans' => $artisans,
        ]);
    }

    public function ReadMorePost($id)
    {   

        $post = Artisan::find($id);

        return view('Site.readmore',[
            "post" => $post,
        ]);
    }

    public function PostSearch(Request $request){
        $title = $request->input('title');
        $artisans = Artisan::with("getCategorys")->where("title", "LIKE", "%$title%")->orderBy("id", "DESC")->paginate(15);
        Paginator::useBootstrap();
        return view('Site.postsearch',[
            'searchtitle' => $title,
            'artisans' => $artisans
        ]);
    }
}
