@extends('pageAdmin.template')

@section('content')

<div id="main">
    <div class="row">
        <div id="breadcrumbs-wrapper" data-image="{{asset('public/template/images/gallery/breadcrumb-bg.jpg')}}">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l6">
                        <h5 class="breadcrumbs-title mt-0 mb-0">Daftar Pengaduan </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <div class="section section-data-tables">
                    <div class="row">
                        <div class="col s12">
                            <div class="card">
                                <div class="card-content">

                                    <div class="row">
                                        <div class="col s12">
                                            <table id="page-length-option" class="display">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Pesan</th>
                                                        <th>Waktu</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php($no = 1)
                                                    @foreach($logging as $log)
                                                    <tr>
                                                        <td>{{$no++}}</td>
                                                        <td>{{$log->nama}} {{$log->logg}}</td>
                                                    <td>{{$log->created_at}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
