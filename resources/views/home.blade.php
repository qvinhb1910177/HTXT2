@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h1> Form thông tin sinh viên </h1>
                        <form action="dataInsert" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="Tinh" class="control-lable">Tinh:</label>
                            <input type="text" name="Tinh" class="form-control"> <br>

                            <label for="Huyen" class="control-lable">Huyen:</label>
                            <input type="text" name="Huyen" class="form-control"> <br>

                            <label for="Xa" class="control-lable">Xa:</label>
                            <input type="text" name="Xa" class="form-control"> <br>
                            <input type="submit" classs="btn-btnprimary" name="" id="">
                        </form>
                        <div>
                        <form action="dataInsertinfo" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="hoten" class="control-lable">hoten:</label>
                            <input type="text" name="hoten" class="form-control"> <br>

                            <label for="gioitinh" class="control-lable">gioitinh:</label>
                            <input type="text" name="gioitinh" class="form-control"> <br>

                            <label for="ngaysinh" class="control-lable">ngaysinh:</label>
                            <input type="date" name="ngaysinh" class="form-control"> <br>

                            <label for="noisinh" class="control-lable">noisinh:</label>
                            <input type="text" name="noisinh" class="form-control"> <br>

                            <label for="dantoc" class="control-lable">dantoc:</label>
                            <input type="text" name="dantoc" class="form-control"> <br>

                            <label for="cccd" class="control-lable">cccd:</label>
                            <input type="int" name="cccd" class="form-control"> <br>

                            <label for="email" class="control-lable">email:</label>
                            <input type="text" name="email" class="form-control"> <br>

                            <label for="sdt" class="control-lable">sdt:</label>
                            <input type="int" name="sdt" class="form-control"> <br>

                            <label for="diachi" class="control-lable">diachi:</label>
                            <input type="text" name="diachi" class="form-control"> <br>
                            <input type="submit" classs="btn-btnprimary" name="" id="">
                        </form>
                    </div>
                    <form action="dataInserthoctap" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="tinh_10_hk1" class="control-lable">tinh_10_hk1:</label>
                        <input type="text" name="tinh_10_hk1" class="form-control"> <br>

                        <label for="tinh_10_hk2" class="control-lable">tinh_10_hk2:</label>
                        <input type="text" name="tinh_10_hk2" class="form-control"> <br>

                        <label for="tinh_11_hk1" class="control-lable">tinh_11_hk1:</label>
                        <input type="text" name="tinh_11_hk1" class="form-control"> <br>

                        <label for="tinh_11_hk2" class="control-lable">tinh_11_hk2:</label>
                        <input type="text" name="tinh_11_hk2" class="form-control"> <br>

                        <label for="tinh_12_hk1" class="control-lable">tinh_12_hk1:</label>
                        <input type="text" name="tinh_12_hk1" class="form-control"> <br>

                        <label for="tinh_12_hk2" class="control-lable">tinh_12_hk2:</label>
                        <input type="text" name="tinh_12_hk2" class="form-control"> <br>

                        <label for="huyen_10_hk1" class="control-lable">huyen_10_hk1:</label>
                        <input type="text" name="huyen_10_hk1" class="form-control"> <br>

                        <label for="huyen_10_hk2" class="control-lable">huyen_10_hk2:</label>
                        <input type="text" name="huyen_10_hk2" class="form-control"> <br>

                        <label for="huyen_11_hk1" class="control-lable">huyen_11_hk1:</label>
                        <input type="text" name="huyen_11_hk1" class="form-control"> <br>

                        <label for="huyen_11_hk2" class="control-lable">huyen_11_hk2:</label>
                        <input type="text" name="huyen_11_hk2" class="form-control"> <br>

                        <label for="huyen_12_hk1" class="control-lable">huyen_12_hk1:</label>
                        <input type="text" name="huyen_12_hk1" class="form-control"> <br>

                        <label for="huyen_12_hk2" class="control-lable">huyen_12_hk2:</label>
                        <input type="text" name="huyen_12_hk2" class="form-control"> <br>

                        <label for="thpt_10_hk1" class="control-lable">thpt_10_hk1:</label>
                        <input type="text" name="thpt_10_hk1" class="form-control"> <br>

                        <label for="thpt_10_hk2" class="control-lable">thpt_10_hk2:</label>
                        <input type="text" name="thpt_10_hk2" class="form-control"> <br>


                        <label for="thpt_11_hk1" class="control-lable">thpt_11_hk1:</label>
                        <input type="text" name="thpt_11_hk1" class="form-control"> <br>

                        <label for="thpt_11_hk2" class="control-lable">thpt_11_hk2:</label>
                        <input type="text" name="thpt_11_hk2" class="form-control"> <br>

                        <label for="thpt_12_hk1" class="control-lable">thpt_12_hk1:</label>
                        <input type="text" name="thpt_12_hk1" class="form-control"> <br>

                        <label for="thpt_12_hk2" class="control-lable">thpt_12_hk2:</label>
                        <input type="text" name="thpt_12_hk2" class="form-control"> <br>

                        <label for="namtotnghiep" class="control-lable">namtotnghiep:</label>
                        <input type="text" name="namtotnghiep" class="form-control"> <br>

                        <label for="dtuutien" class="control-lable">dtuutien:</label>
                        <input type="text" name="dtuutien" class="form-control"> <br>

                        <label for="khuvucts" class="control-lable">khuvucts:</label>
                        <input type="text" name="khuvucts" class="form-control"> <br>
                        <input type="submit" classs="btn-btnprimary" name="" id="">
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
