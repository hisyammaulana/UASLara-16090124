@extends('pageUser.template')

@section('content')

<div id="main">
    <div class="row">
        <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l6">
                        <h5 class="breadcrumbs-title">Riwayat Pengaduan Anda</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="col s12 m12">
                @if ($message = Session::get('danger'))
                <div class="card-alert card red lighten-5">
                    <div class="card-content red-text">
                        <p>Berhasil Dihapus.</p>
                    </div>
                    <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                @endif
            </div>
            <div class="container">
                <div class="section section-data-tables">

                    <div class="row">
                        <div class="col s12">
                            <div class="card">
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12">
                                        <table id="page-length-option" class="display">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php($no = 1)
                                                @foreach($aduan as $data)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$data->judul}}</td>
                                                    <td>
                                                        <form class="" action="{{route('aduan.destroy', $data->id)}}" method="POST">
                                                            {{ csrf_field() }}
                                                            {{ method_field('PATCH') }}
                                                            <button class="mb-6 btn-floating mb-1 waves-effect waves-light  pink accent-2 white-text" type="submit"><i class="material-icons"> indeterminate_check_box</i></button>
                                                            <a href="{{route('detail.riwayat.aduan', $data->id)}}" class="mb-6 btn-floating mb-1 waves-effect waves-light "><i class="material-icons"> remove_red_eye</i></a>
                                                        </form>

                                                    </td>
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
