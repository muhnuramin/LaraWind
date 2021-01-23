@extends('layouts/admin')

@section('conten')
<div class="container2 pt-12">
    <div class="container1">
        <div class="flex justify-around items-center kotak sm:rounded-lg shadow-xl">
            <div class="logo"><i class="fa fa-users fa-3x" aria-hidden="true"></i>
            </div>
            <div class="isi">
                <b class="text-xl">User</b>
                <p>90k</p>
            </div>
        </div>
        <div class="flex justify-around items-center kotak1 sm:rounded-lg shadow-xl">
            <div class="logo"><i class="fa fa-user fa-3x" aria-hidden="true"></i>
            </div>
            <div class="isi">
                <b class="text-xl">Pemilih</b>
                <p>90k</p>
            </div>
        </div>
        <div class="flex justify-around items-center kotak2 sm:rounded-lg shadow-xl">
            <div class="logo"><i class="fa fa-trash-o fa-3x" aria-hidden="true"></i>
            </div>
            <div class="isi">
                <b class="text-xl">Golput</b>
                <p>90k</p>
            </div>
        </div>
        <div class="flex justify-around items-center kotak3 sm:rounded-lg shadow-xl">
            <div class="logo"><i class="fa fa-user-times fa-3x" aria-hidden="true"></i>
            </div>
            <div class="isi">
                <b class="text-xl">Tidak Sah</b>
                <p>90k</p>
            </div>
        </div>
    </div>
</div>
<div class="py-12">
    <div class="conten1">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200 mt-10">
                <p>Suara Masuk</p>
            </div>
        </div>
    </div>
</div>
@endsection