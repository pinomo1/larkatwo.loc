<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminIndexController extends Controller
{
    
    public function AdminIndexPage()
    {

        return view('admin.adminka');
    }

}
