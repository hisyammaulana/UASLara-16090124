@extends('pageAdmin.template')

 @section('content')

 <div id="main">
        <div class="row">
          <div id="breadcrumbs-wrapper" data-image="{{asset('public/template/images/gallery/breadcrumb-bg.jpg')}}">
            <!-- Search for small screen-->
            <div class="container">
              <div class="row">
                <div class="col s12 m6 l6">
                  <h5 class="breadcrumbs-title mt-0 mb-0"> Daftar Kategori Pengaduan</h5>
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
                                                <span class="helper-text" data-error="wrong" data-success="right">Tambah Kategori</span>
                                                <form action="{{route('admin.kategori.store')}}" method="POST">
                                                    {{ csrf_field() }}
                                                    <div class="input-field col s12">
                                                        <input id="name"  name="name" type="text" class="validate">
                                                    </div>
                                                    <div class="input-field col s12 center">
                                                        <button class="btn waves-effect waves-light " type="submit" name="action">Tambah</button>
                                                    </div>
                                                </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

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
                                            <th>Kategori</th>
                                            <th>Opsi</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @php($no = 1)
                                            @foreach ($kategori as $kategories)
                                            <tr>
                                                <td>{{$no++}}</td>
                                                    <td>{{$kategories->name}}</td>
                                                    <td>
                                                            <a class="mb-6 btn-floating mb-1 waves-effect waves-light "><i class="material-icons"> remove_red_eye</i></a>
                                                            <a class="mb-6 btn-floating mb-1 waves-effect waves-light  pink accent-2 white-text"><i class="material-icons"> indeterminate_check_box</i></a>
                                                            {{-- <a class="btn-floating mb-1 btn-flat waves-effect waves-light pink accent-2 white-text"><i class="material-icons">indeterminate_check_box</i></a> --}}
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
@endsection
