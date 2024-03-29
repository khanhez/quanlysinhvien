<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diem;
use App\Post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['monhoc'] = Post::all();
        $data['diem'] = Diem::all();
        return view('home',$data);
    }
}
