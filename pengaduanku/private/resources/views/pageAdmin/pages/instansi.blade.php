@extends('pageAdmin.template')

 @section('content')

 <div id="main">
        <div class="row">
          <div id="breadcrumbs-wrapper" data-image="{{asset('public/template/images/gallery/breadcrumb-bg.jpg')}}">
            <!-- Search for small screen-->
            <div class="container">
              <div class="row">
                <div class="col s12 m6 l6">
                  <h5 class="breadcrumbs-title mt-0 mb-0">Daftar Laporan Masuk </h5>
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
                                            <th>Nama Useri</th>
                                            <th>Instansi</th>
                                            <th>Opsi</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @php($no = 1)
                                            @foreach($aduans as $data)
                                          <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->judul}}</td>
                                            <td>
                                                    <a class="mb-6 btn-floating mb-1 waves-effect waves-light "><i class="material-icons"> remove_red_eye</i></a>
                                                    <a class="btn-floating mb-1 btn-flat waves-effect waves-light pink accent-2 white-text"><i class="material-icons">indeterminate_check_box</i></a>
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
