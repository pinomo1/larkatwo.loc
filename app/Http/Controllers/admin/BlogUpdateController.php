<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use League\Flysystem\Filesystem;
use App\Models\Artisan;
use App\Models\Category;
// use App\Services\StudentsTwo;
// use App\Contracts\Date;
use Illuminate\Support\Facades\Storage;
use App\Facade\PostTime;

class BlogUpdateController extends Controller
{
    public function BlogPage(Request $request)
    {

        $artisans = Artisan::with("getCategorys")->orderBy("id", "DESC")->paginate(3);

        return view('admin.bloglist', [
            'artisans' => $artisans,
        ]);
    }

    public function BlogAddPage()
    {
        $categories = Category::select()->get();

        return view('admin.blogadd', [
            "categories" => $categories,
        ]);
    }

    public function BlogAdd(Request $request)
    {

        if(Storage::disk('uploade_file_post')) {
            $path = $request->file('image')->store('blog', 'uploade_file_post');
        }
        
        $artisan = new Artisan;

        $artisan->title = $request->title;
        $artisan->sub_text = $request->description;
        $artisan->text = $request->text; 
        $artisan->img = basename($path);
        $artisan->data = date("y-m-d");
        $artisan->category_id = $request->category;
        $artisan->user_id = 1;

        if($artisan->save())
        {
            $request->session()->flash('alert-success-add-post', 'Post added.');
            return redirect()->route('bloglist');
        } else {
            $request->session()->flash('alert-errors-add-post', 'Post not added.');
            Storage::disk('uploade_file_post')->delete('blog/' . basename($path));
            return redirect()->route('bloglist');
        }

    }

    public function EditPage($id)
    {

        $artisan = Artisan::with("getCategorys")->find($id);
        $categories = Category::select()->get();

        return view('admin.blogeditpage', [
            "artisan" => $artisan,
            "categories" => $categories,
        ]);
    }

    public function EditPost(Request $request)
    {

        $artisan = Artisan::find($request->id);

        if ($request->has("image")) {
            if(Storage::disk('uploade_file_post')) {
                Storage::disk('uploade_file_post')->delete('blog/' . $artisan->img);
                $path = $request->file('image')->store('blog', 'uploade_file_post');
            }
        }

        $artisan->title = $request->title;
        $artisan->sub_text = $request->description;
        $artisan->text = $request->text;
        if (isset($path)) {
            $artisan->img = basename($path);
        }
        $artisan->data = date("y-m-d");
        $artisan->category_id = $request->category;
        $artisan->user_id = 1;

        if($artisan->save())
        {
            $request->session()->flash('alert-success-add-post', 'Post edited.');
            return redirect()->route('bloglist');
        } else {
            $request->session()->flash('alert-errors-add-post', 'Post not edited.');
            Storage::disk('uploade_file_post')->delete('blog/' . basename($path));
            return redirect()->route('bloglist');
        }

        return redirect()->route("bloglist");
    }

    public function PostDelete(Request $request, $id)
    {
        $artisan = Artisan::find($id);
        $artisanIMG = $artisan->img;
        if($artisan->delete())
        {   
            Storage::disk('uploade_file_post')->delete('blog/' . $artisanIMG);
            $request->session()->flash('alert-success-delete-post', 'Delete Post.');
            return redirect()->route('bloglist');
        } else {
            $request->session()->flash('alert-success-delete-post-error', 'Delete Post Error.');
            return redirect()->route('bloglist');
        }
    }

}
