<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diem;
class DiemController extends Controller
{
    //
    public function form()
    {
        return view('diem.form');
    }
    public function save(Request $request)
    {
        $data = new Diem($request->all());
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
        $datas['d'] = Diem::findOrFail($_id);
        return view('diem.danhsach',$datas);
    }

    public function postupdate(Request $request,$_id)
    {
        $data = Diem::findOrFail($_id);
        $data->diemlan1=$request->diemlan1; 
        $data->diemlan2=$request->diemlan2; 
        $data->hocki=$request->hocki; 
        $data->msv=$request->msv; 
        $data->mamh=$request->mamh; 
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
        $data = Diem::destroy($_id);
        if($data){
            return redirect()->route('home');
        }
        else
        {
            dd('xoa k thanh cong');
        }
    }
}
