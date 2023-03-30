@extends('layouts.admin')

@section('title', 'Halaman Dashboard')

@section('header', 'Dashboard')

@section('content')



    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">Petugas</div>
                <a href="/admin/petugas">
                    <div class="card-body">
                        <div class="text-center">
                            {{ $petugas }}
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">Masyarakat</div>
                <a href="/admin/masyarakat">
                    <div class="card-body">
                        <div class="text-center">
                            {{ $masyarakat }}
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">Pengaduan Proses</div>
                <a href="/admin/pengaduan">
                    <div class="card-body">
                        <div class="text-center">
                            {{ $proses }}
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">pengaduan Selesai</div>
                <a href="/admin/pengaduan">
                    <div class="card-body">
                        <div class="text-center">
                            {{ $selesai }}
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
