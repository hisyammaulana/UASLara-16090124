@extends('pageUser.template')

@section('content')
<div id="main">
    <div class="row">
        <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l6">
                        <h5 class="breadcrumbs-title">Detail Pengaduan</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div id="input-fields" class="card card-tabs">
                    <div class="card-content">
                        <div class="card-title">
                            <div class="row">
                                <div class="col s12 m6 l10">
                                </div>
                            </div>
                        </div>
                        <div id="view-input-fields">
                            <div class="row">
                                <div class="col s12">
                                    <div class="card-image">
                                        <img src="{{ url('private/storage/public/images/'.$detail->image)  }}" width="300px" height="400px" alt="">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title">{{$detail->judul}}</span>
                                        <p>
                                            {{$detail->isi}}
                                        </p>
                                    </div>
                                    <div class="card light-blue">
                                        <div class="card-content white-text">
                                            <span class="card-title">Komentar</span><br>
                                            <span class="card-title">Tanggapan</span>
                                            <p>
                                                I am a very simple card with solid background &amp; link. I am good at
                                                containing small bits of
                                                information. I am convenient because I require little markup to use
                                                effectively.
                                            </p>
                                        </div>
                                        <div class="card-action">
                                            <div class="input-field col s12">
                                                <input id="first_name1" type="text" class="validate" placeholder="Komentar">
                                            </div>
                                            <a class="btn-floating activator btn-move-up waves-effect waves-light waves-light cyan accent-2 z-depth-4 right">
                                                <i class="material-icons">send</i>
                                            </a>
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
