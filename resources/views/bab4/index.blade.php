@extends('layout.index')

@section('content')

@if (Session::has('success'))
    <div class="alert alert-success alert-solid" role="alert"><b>Data Kerjasama</b> {{ Session::get('success') }}</div>  
@endif 

@include('bab4.daftar')           
<div class="card">
    <div class="card-header">
        <b>BAB 4. RENCANA PELAKSANAAN KERJA SAMA</b>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-4">No Berkas</div>
            <div class="col-sm-8">: 2305140001.1</div>
            <div class="col-sm-4">Judul Kerma</div>
            <div class="col-sm-8">: Gelar Ganda ( Double Degree ) Universitas Halu Oleo S2 Perternakan Dengan PT. ABC Perternakan Unpad</div>
        </div>
    </div>
</div>
@endsection