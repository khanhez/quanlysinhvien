<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    //
    public function form()
    {
        return view('post.form');
    }
    public function save(Request $request)
    {
        $data = new Post($request->all());
        $data->save();
        if($data){
            return redirect()->route('home');
        }
        else
        {
            return back();
        }
    }
    public function getupdate($_id)
    {
        $datas['monhoc'] = Post::findOrFail($_id);
        return view('post.danhsach',$datas);
    }

    public function postupdate(Request $request,$_id)
    {
        $data = Post::findOrFail($_id);
        $data->tenmonhoc=$request->tenmonhoc; 
        $data->sotinchi=$request->sotinchi; 
        $data->save();
        if($data){
            return redirect()->route('home');
        }
        else
        {
            return back();
        }
    }
    public function delete($_id)
    {
        $data = Post::destroy($_id);
        if($data){
            return redirect()->route('home');
        }
        else
        {
            dd('xoa k thanh cong');
        }
    }
}
