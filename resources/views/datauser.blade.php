@extends('layouts/admin')

@section('conten')
<div class="py-12">
    <div class="conten1">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200 mt-10">
                <table class="tabel" style="width:100%" id="table-user">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>aksi</th>
                    </tr>
                    </thead>
                    <tr>
                        <td>1</td>
                        <td>Smith</td>
                        <td>50</td>
                        <td>Smith</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jackson</td>
                        <td>94</td>
                        <td>Jackson</td>
                        <td>94</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
