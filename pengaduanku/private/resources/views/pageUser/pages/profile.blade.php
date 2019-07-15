@extends('pageUser.template')

@section('content')
<div id="main">
  <div class="row">
    <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
      <!-- Search for small screen-->
      <div class="container">
        <div class="row">
          <div class="col s12 m6 l6">
            <h5 class="breadcrumbs-title">Profile</h5>
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
                  <form class="row">
                    <div class="col s12">
                      <div class="input-field col s12">
                        <input name="name" id="first_name1" type="text" class="validate" value="{{$data->name}}">
                        <label for="first_name1">Nama Lengkap</label>
                      </div>

                      <div class="input-field col s12">
                        <input name="email" id="first_name1" type="text" class="validate" value="{{$data->email}}">
                        <label for="textarea2">Email</label>
                      </div>

                      <div class="input-field col s12">
                        <textarea name="alamat" id="textarea2" class="materialize-textarea"></textarea>
                        <label for="first_name1">Alamat</label>
                      </div>

                      <div class="input-field col s12">
                        <input name="notelp" id="first_name1" type="text" class="validate" {{$data->notelp}}>
                        <label for="first_name1">No. Telepon</label>
                      </div>

                      <div class="divider"></div>
                      <div class="row section">
                        <div class="col s12 m4 l3">
                          <p>Unggah Gambar</p>
                        </div>
                        <div class="col s12 m8 l9">
                          <input name="image" type="file" id="input-file-events" class="dropify-event" />
                        </div>
                      </div>
                    </div>
                    <div class="input-field col s12 center">
                      <br>
                      <a class="mb-6 btn waves-effect waves-light red accent-2" type="submit">Kembali</a>
                      <a class="mb-6 btn waves-effect waves-light cyan" type="submit">Update Profile</a>
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
