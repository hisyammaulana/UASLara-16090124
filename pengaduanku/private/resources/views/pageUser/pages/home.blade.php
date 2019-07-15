@extends('pageUser.template')

@section('content')
<div id="main">
    <div class="row">
      <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
        <!-- Search for small screen-->
        <div class="container">
          <div class="row">
            <div class="col s12 m6 l6">
              <h5 class="breadcrumbs-title">Knowledge Licensing Page</h5>
            </div>
            <div class="col s12 m6 l6 right-align-md">
              <ol class="breadcrumbs mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Pages</a>
                </li>
                <li class="breadcrumb-item"><a href="page-knowledge.html">Knowledge</a>
                </li>
                <li class="breadcrumb-item active">Knowledge Licensing
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12">
        <div class="container">
          <!-- knowledge Licensing -->
<div class="section" id="knowledge-licensing">
<div class="row knowledge-content">
  <!-- Licenses -->
  <div class="col s12 licenses">
    <div class="card-border-gray pb-3">
      <div class="row">

        @foreach ($data as $item)
        <div class="col s12 m6 l6">
                <div class="card horizontal border-radius-6">
                  <div class="card-image">
                    <a href="#"><img class="responsive-img image-n-margin" src="{{ url('private/storage/public/images/'.$item->image)  }}"
                        alt=""></a>
                  </div>
                  <div class="card-stacked">
                    {{-- <div class="card-content "> --}}
                    <a style="text-align: left; margin-left:20px " href="#" class="black-text"><h5>{{$item->judul}}</h5></a>
                    {{-- </div> --}}
                    <div class="card-content pl-7 pt-7 pr-7 pb-7">
                      <p class="mb-4">{{str_limit($item->isi, 100, '  ')}}<a href="{{ route('aduan.detail', $item->id) }}">Read More ...</a></p>
                    </div>
                    <div class="card-action pt-4 pb-3">
                      <div class="row social-icon">
                            <div class="col s5 mt-1">
                                    <img src="{{asset('public/template/images/user/4.jpg')}}" alt="news" class="circle mr-2 width-20 vertical-text-middle">
                            <span class="pt-2">{{$item->name}}</span>
                            </div>
                        <span class="material-icons ml-10">chat_bubble_outline</span> <span class="ml-3 vertical-align-top">409</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        @endforeach
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
