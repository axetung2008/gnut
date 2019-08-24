<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donthuoc;
use App\User;
use Illuminate\Support\Facades\Auth;
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
    public function index(){
        $donthuoc = Donthuoc::orderBy('id','DESC')->get();
        return view('home',['donthuoc'=>$donthuoc]);
    }


    public function them(){
        return view('them');
    }

    public function postThem(Request $Request){
        $donthuoc = new donthuoc;
        $donthuoc ->tenbenhnhan = $Request->tenbenhnhan;
        $donthuoc ->tenthuoc = $Request->tenthuoc;
        $donthuoc ->gia = $Request->gia;
        $donthuoc->save();
        return redirect('home');
    }

    public function sua($id){
        $donthuoc = Donthuoc::find($id);
        return view('sua',['donthuoc'=>$donthuoc]);
    }

    public function postSua(Request $Request, $id){
        $donthuoc = Donthuoc::find($id);
        $donthuoc ->tenbenhnhan = $Request->tenbenhnhan;
        $donthuoc ->tenthuoc = $Request->tenthuoc;
        $donthuoc ->gia = $Request->gia;
        $donthuoc->save();
        return redirect('home');
    }

    public function xoa($id){
        $user = Auth::user();
        $donthuoc = Donthuoc::find($id);
        $donthuoc->delete();
        return redirect('home');
    }

    public function duyet($id){
        $donthuoc = Donthuoc::find($id);
        return view('duyet',['donthuoc'=>$donthuoc]);
    }

    public function postDuyet(Request $Request, $id)
    {
        $donthuoc = Donthuoc::find($id);
        $donthuoc ->queue = $Request ->queue;
        $donthuoc ->save();
        return redirect('home');
    }
}
