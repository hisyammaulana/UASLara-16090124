@extends('pageUser.template')

@section('content')
<div id="main">
    <div class="row">
        <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l6">
                        <h5 class="breadcrumbs-title">Isi Aduan Anda</h5>
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
                                <div class="col s12 m6 l12">
                                    @if ($message = Session::get('success'))
                                    {{-- <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                                </div> --}}
                                <div class="card-alert card green lighten-5">
                                    <div class="card-content green-text">
                                        <p>Berhasil Dilaporkan.</p>
                                    </div>
                                    <button type="button" class="close green-text" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div id="view-input-fields">
                        <div class="row">
                            <div class="col s12">
                                <form class="row" action="{{route('isiaduan.store')}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="col s12">
                                        <div class="input-field col s12">
                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="judul" name="judul" type="text" class="validate">
                                            <label for="first_name1">Judul Pengaudan Anda</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <textarea id="isi" name="isi" class="materialize-textarea"></textarea>
                                            <label for="textarea2">Isi Pengaduan Anda</label>
                                        </div>

                                        <div class="input-field col s12">
                                            <select class="browser-default" name="kategori_id">
                                                <option value="" disabled selected>Kategori Pengaduan</option>
                                                @foreach ($kategoris as $kategori)
                                                <option value="{{$kategori->id}}">{{$kategori->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="divider"></div>
                                        <div class="row section">
                                            <div class="col s12 m4 l3">
                                                <p>Unggah Gambar</p>
                                            </div>
                                            <div class="col s12 m8 l9">
                                                <input type="file" id="input-file-events" name="image" class="dropify-event" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-field col s12 center">
                                        <br>
                                        <button class="mb-6 btn waves-effect waves-light cyan" type="submit">Laporkan Aduan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
