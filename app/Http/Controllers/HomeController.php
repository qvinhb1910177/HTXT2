<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adr;
use App\Models\Info;
use App\Models\Hoctap;
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
        return view('home');
    }
    function    DataInsert(Request $request){
        $Tinh = $request->input('Tinh');
        $Huyen = $request->input('Huyen');
        $Xa = $request->input('Xa');
        $isInsertSuccress = Adr::insert(['Tinh'=>$Tinh,
                                         'Huyen'=>$Huyen,
                                        'Xa'=>$Xa,
                                    ]);
       if($isInsertSuccress) echo '<h1> thanh ccong </h1>';
       else echo '<h1> that bai </h1>';
    }
    function    DataInsertinfo(Request $request){
        $hoten = $request->input('hoten');
        $gioitinh = $request->input('gioitinh');
        $ngaysinh = $request->input('ngaysinh');
        $noisinh = $request->input('noisinh');
        $dantoc = $request->input('dantoc');
        $cccd = $request->input('cccd');
        $email = $request->input('email');
        $sdt = $request->input('sdt');
        $diacchi = $request->input('diachi');
        $isInsertSuccress = Info::insert(['hoten'=>$hoten,
                                         'gioitinh'=>$gioitinh,
                                         'ngaysinh'=>$ngaysinh,
                                         'noisinh'=>$noisinh,
                                         'dantoc'=>$dantoc,
                                         'cccd'=>$cccd,
                                         'email'=>$email,
                                         'sdt'=>$sdt,
                                         'diachi'=>$diacchi,
                                    ]);
       if($isInsertSuccress) echo '<h1> thanh ccong </h1>';
       else echo '<h1> that bai </h1>';
    }
    function    DataInserthoctap(Request $request){
        $tinh_10_hk1= $request->input('tinh_10_hk1');
        $tinh_10_hk2= $request->input('tinh_10_hk2');
        $tinh_11_hk1 = $request->input('tinh_11_hk1');
        $tinh_11_hk2 = $request->input('tinh_11_hk2');
        $tinh_12_hk1 = $request->input('tinh_12_hk1');
        $tinh_12_hk2 = $request->input('tinh_10_hk2');
        $huyen_10_hk1= $request->input('huyen_10_hk1');
        $huyen_10_hk2= $request->input('huyen_10_hk2');
        $huyen_11_hk1 = $request->input('huyen_11_hk1');
        $huyen_11_hk2 = $request->input('huyen_11_hk2');
        $huyen_12_hk1 = $request->input('huyen_12_hk1');
        $huyen_12_hk2 = $request->input('huyen_10_hk2');
        $thpt_10_hk1= $request->input('thpt_10_hk1');
        $thpt_10_hk2= $request->input('thpt_10_hk2');
        $thpt_11_hk1 = $request->input('thpt_11_hk1');
        $thpt_11_hk2 = $request->input('thpt_11_hk2');
        $thpt_12_hk1 = $request->input('thpt_12_hk1');
        $thpt_12_hk2 = $request->input('thpt_10_hk2');
        $namtotnghiep = $request->input('namtotnghiep');
        $dtuutien = $request->input('dtuutien');
        $khuvucts = $request->input('khuvucts');
        $isInsertSuccress = Hoctap::insert(['tinh_10_hk1'=>$tinh_10_hk1,
                                        'tinh_10_hk2'=>$tinh_10_hk2,
                                        'tinh_11_hk1'=>$tinh_11_hk1,
                                        'tinh_11_hk2'=>$tinh_11_hk2,
                                        'tinh_12_hk1'=>$tinh_12_hk1,
                                        'tinh_12_hk2'=>$tinh_12_hk2,
                                        'huyen_10_hk1'=>$huyen_10_hk1,
                                        'huyen_10_hk2'=>$huyen_10_hk2,
                                        'huyen_11_hk1'=>$huyen_11_hk1,
                                        'huyen_11_hk2'=>$huyen_11_hk2,
                                        'huyen_12_hk1'=>$huyen_12_hk1,
                                        'huyen_12_hk2'=>$huyen_12_hk2,
                                        'thpt_10_hk1'=>$thpt_10_hk1,
                                        'thpt_10_hk2'=>$thpt_10_hk2,
                                        'thpt_11_hk1'=>$thpt_11_hk1,
                                        'thpt_11_hk2'=>$thpt_11_hk2,
                                        'thpt_12_hk1'=>$thpt_12_hk1,
                                        'thpt_12_hk2'=>$thpt_12_hk2,
                                        'namtotnghiep'=>$namtotnghiep,
                                        'dtuutien'=>$dtuutien,
                                        'khuvucts'=>$khuvucts,
                                    ]);
       if($isInsertSuccress) echo '<h1> thanh ccong </h1>';
       else echo '<h1> that bai </h1>';
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
        return view('managerHome');
    }
}
