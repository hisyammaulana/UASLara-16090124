@extends('pageUser.template')

@section('content')
<div id="main">
    <div class="row">
      <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
        <!-- Search for small screen-->
        <div class="container">
          <div class="row">
            <div class="col s12 m6 l6">
              <h5 class="breadcrumbs-title">Blog List Page</h5>
            </div>
            <div class="col s12 m6 l6 right-align-md">
              <ol class="breadcrumbs mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Pages</a>
                </li>
                <li class="breadcrumb-item active">Blog List Page
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12">
        <div class="container">
          <div class="section mt-2" id="blog-list">
<div class="row">
  <!-- Blog Style One -->

  <!-- Fashion Card -->
  <div class="col s12 m6 l4">
    <div class="card-panel border-radius-6 mt-10 card-animation-1">
      <a href="#"><img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="{{asset('public/template/images/cards/news-fashion.jpg')}}"
          alt=""></a>
      <h6 class="deep-purple-text text-darken-3 mt-5"><a href="#">Fashion</a></h6>
      <span>Fashion is a popular style, especially in clothing, footwear, lifestyle, accessories, makeup, hairstyle
        and body.</span>
      <div class="row mt-4">
        <div class="col s5 mt-1">
          <img src="{{asset('public/template/images/user/9.jpg')}}" alt="fashion" class="circle mr-3 width-30 vertical-text-middle">
          <span class="pt-2">Taniya</span>
        </div>
        <div class="col s7 mt-3 right-align social-icon">
          <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">340</span>
          <span class="material-icons ml-10">chat_bubble_outline</span> <span class="ml-3 vertical-align-top">80</span>
        </div>
      </div>
    </div>
  </div>
  <!-- Apple News -->
  <div class="col s12 m6 l4">
    <div class="card-panel border-radius-6 mt-10 card-animation-1">
      <a href="#"><img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="{{asset('public/template/images/cards/news-apple.jpg')}}"
          alt=""></a>
      <h6 class="deep-purple-text text-darken-3 mt-5"><a href="#">Apple News</a></h6>
      <span>Some users have reported their new phones won't charge when plugged into lightning cables when their
        screens are off.</span>
      <div class="row mt-4">
        <div class="col s5 mt-1">
          <img src="{{asset('public/template/images/user/1.jpg')}}" alt="news" class="circle mr-3 width-30 vertical-text-middle">
          <span class="pt-2">Mike</span>
        </div>
        <div class="col s7 mt-3 right-align social-icon">
          <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">434</span>
          <span class="material-icons ml-10">chat_bubble_outline</span> <span class="ml-3 vertical-align-top">34</span>
        </div>
      </div>
    </div>
  </div>
  <!-- Twitter News -->
  <div class="col s12 m6 l4">
    <div class="card-panel border-radius-6 mt-10 card-animation-1">
      <a href="#"><img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="{{asset('public/template/images/cards/news-twitter.jpg')}}"
          alt=""></a>
      <h6 class="deep-purple-text text-darken-3 mt-5"><a href="#">Twitter Brings Its 'Data Saver</a></h6>
      <span>Microblogging site Twitter has rolled out its latest update for Android and iOS users with the "data
        saver" twitter Application.
      </span>
      <div class="row mt-4">
        <div class="col s5 p-0 mt-1">
          <img src="{{asset('public/template/images/user/8.jpg')}}" alt="news" class="circle mr-3 width-30 vertical-text-middle">
          <span class="pt-2">Emma</span>
        </div>
        <div class="col s7 mt-3 right-align social-icon">
          <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">234</span>
          <span class="material-icons ml-10">chat_bubble_outline</span> <span class="ml-3 vertical-align-top">45</span>
        </div>
      </div>
    </div>
  </div>
  <!-- Blog Style Two -->
</div>
<div class="row">
  <!-- Share markets News -->
  <div class="col s12 m6 l4">
    <div class="card-panel border-radius-6 white-text gradient-45deg-deep-purple-blue card-animation-2">
      <h6 class="mt-5"><b><a href="#" class="white-text">Sensex Nosedives 850 Points</a></b></h6>
      <span>Share markets on Thursday: Prominent losers in the Sensex pack were Maruti, ICICI Bank, Reliance and Yes
        Bank.
      </span>
      <div class="row mt-4">
        <div class="col s5 mt-1">
          <img src="{{asset('public/template/images/user/2.jpg')}}" alt="news" class="circle mr-3 width-30 vertical-text-middle">
          <span class="pt-2">Alex</span>
        </div>
        <div class="col s7 mt-3 right-align social-icon">
          <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">531</span>
          <span class="material-icons ml-10">chat_bubble_outline</span> <span class="ml-3 vertical-align-top">99</span>
        </div>
      </div>
    </div>
  </div>
  <!-- USA News -->
  <div class="col s12 m6 l4">
    <div class="card-panel border-radius-6 white-text gradient-45deg-purple-deep-orange card-animation-2">
      <h6 class="mt-5"><b><a href="#" class="white-text">Famous for stylish jewelries</a></b></h6>
      <span>Sophia Fiori is one of the most famous jewelry designer in the USA. Sophia Fiori has got legacy of four
        generations.
      </span>
      <div class="row mt-4">
        <div class="col s5 mt-1">
          <img src="{{asset('public/template/images/user/8.jpg')}}" alt="news" class="circle mr-3 width-30 vertical-text-middle">
          <span class="pt-2">Taniya</span>
        </div>
        <div class="col s7 mt-3 right-align social-icon">
          <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">167</span>
          <span class="material-icons ml-10">chat_bubble_outline</span> <span class="ml-3 vertical-align-top">23</span>
        </div>
      </div>
    </div>
  </div>
  <!-- Fasion News -->
  <div class="col s12 m6 l4">
    <div class="card-panel border-radius-6 white-text gradient-45deg-indigo-light-blue card-animation-2">
      <h6 class="mt-5"><b><a href="#" class="white-text">Lagom Way to Try Fall rends</a></b></h6>
      <span>You're not going to try every fall trend we write about here at Who What Wear, but where's the fun in not
        trying any at all?
      </span>
      <div class="row mt-4">
        <div class="col s5 p-0 mt-1">
          <img src="{{asset('public/template/images/user/4.jpg')}}" alt="news" class="circle mr-3 width-30 vertical-text-middle">
          <span class="pt-2">Peter</span>
        </div>
        <div class="col s7 mt-3 right-align social-icon">
          <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">627</span>
          <span class="material-icons ml-10">chat_bubble_outline</span> <span class="ml-3 vertical-align-top">44</span>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Trending News -->
<div class="row">
  <!-- News 1 -->
  <div class="col s12 m6 l4">
    <div class="card-panel border-radius-6 pt-4 pb-4">
      <span class="red-text"><i class="material-icons vertical-align-bottom"> trending_up </i> Trending</span>
      <p class="mt-4 mb-0">Bringing smooth animation transition in android</p>
      <div class="row mt-2">
        <div class="col s5 mt-1">
          <img src="{{asset('public/template/images/user/2.jpg')}}" alt="news" class="circle mr-3 width-30 vertical-text-middle">
          <span class="pt-2">Alex</span>
        </div>
        <div class="col s7 mt-3 right-align social-icon">
          <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">120</span>
          <span class="material-icons ml-10">chat_bubble_outline</span> <span class="ml-3 vertical-align-top">67</span>
        </div>
      </div>
    </div>
  </div>
  <!-- News 2 -->
  <div class="col s12 m6 l4">
    <div class="card-panel border-radius-6 pt-4 pb-4">
      <span class="red-text"><i class="material-icons vertical-align-bottom"> trending_up </i> Trending</span>
      <p class="mt-4 mb-0">Bringing smooth animation transition in android</p>
      <div class="row mt-2">
        <div class="col s5 mt-1">
          <img src="{{asset('public/template/images/user/4.jpg')}}" alt="news" class="circle mr-3 width-30 vertical-text-middle">
          <span class="pt-2">John</span>
        </div>
        <div class="col s7 mt-3 right-align social-icon">
          <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">120</span>
          <span class="material-icons ml-10">chat_bubble_outline</span> <span class="ml-3 vertical-align-top">67</span>
        </div>
      </div>
    </div>
  </div>
  <!-- News 3 -->
  <div class="col s12 m6 l4">
    <div class="card-panel border-radius-6 pt-4 pb-4">
      <span class="red-text"><i class="material-icons vertical-align-bottom"> trending_up </i> Trending</span>
      <p class="mt-4 mb-0">Bringing smooth animation transition in android</p>
      <div class="row mt-2">
        <div class="col s5 mt-1">
          <img src="{{asset('public/template/images/user/3.jpg')}}" alt="news" class="circle mr-3 width-30 vertical-text-middle">
          <span class="pt-2">Mike</span>
        </div>
        <div class="col s7 mt-3 right-align social-icon">
          <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">120</span>
          <span class="material-icons ml-10">chat_bubble_outline</span> <span class="ml-3 vertical-align-top">67</span>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Horizontal News -->
<div class="row">
  <!-- News 1 -->
  <div class="col s12 m6 l6">
    <div class="card horizontal border-radius-6">
      <div class="card-image">
        <a href="#"><img class="responsive-img image-n-margin" src="{{asset('public/template/images/cards/horizontal-news-1.jpg')}}"
            alt=""></a>
      </div>
      <div class="card-stacked">
        <div class="card-content pl-7 pt-7 pr-7 pb-7">
          <p class="mb-4">It’s 2018, and the race is on between tech giants to decide who will control...</p>
          <a href="#">Read More</a>
        </div>
        <div class="card-action pt-4 pb-3">
          <div class="row social-icon">
            <span class="material-icons ml-3">favorite_border</span> <span class="ml-3 vertical-align-top">809</span>
            <span class="material-icons ml-10">chat_bubble_outline</span> <span class="ml-3 vertical-align-top">409</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- News 2 -->
  <div class="col s12 m6 l6">
    <div class="card horizontal border-radius-6">
      <div class="card-image">
        <a href="#"><img class="responsive-img image-n-margin" src="{{asset('public/template/images/cards/horizontal-news-2.jpg')}}"
            alt=""></a>
      </div>
      <div class="card-stacked">
        <div class="card-content pl-7 pt-7 pr-7 pb-7">
          <p class="mb-4">It’s 2018, and the race is on between tech giants to decide who will control...</p>
          <a href="#">Read More</a>
        </div>
        <div class="card-action pt-4 pb-3">
          <div class="row social-icon">
            <span class="material-icons ml-3">favorite_border</span> <span class="ml-3 vertical-align-top">300</span>
            <span class="material-icons ml-10">chat_bubble_outline</span> <span class="ml-3 vertical-align-top">239</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Background Image News -->
<div class="row">
  <!-- News 1 -->
  <div class="col s12 m6 l4">
    <div class="card-panel border-radius-6 white-text bg-image-1 pb-4">
      <p class="mt-0 mb-8"><b>Macro Infrared</b> Photographs Unlock The Depth Of Green In A Stunning Array Of Canary
        Island Plants</p>
      <div class="row mt-4">
        <div class="col s4 pr-0">
          <a href="#" class="white-text"> Read More</a>
        </div>
        <div class="col s8 mt-1 right-align social-icon">
          <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">120</span>
          <span class="material-icons ml-10">chat_bubble_outline</span> <span class="ml-3 vertical-align-top">09</span>
        </div>
      </div>
    </div>
  </div>
  <!-- News 1 -->
  <div class="col s12 m6 l4">
    <div class="card-panel border-radius-6 white-text bg-image-2 pb-4">
      <p class="mt-0 mb-8"><b>Macro Infrared</b> Photographs Unlock The Depth Of Green In A Stunning Array Of Canary
        Island Plants</p>
      <div class="row mt-4">
        <div class="col s4 pr-0">
          <a href="#" class="white-text"> Read More</a>
        </div>
        <div class="col s8 mt-1 right-align social-icon">
          <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">51</span>
          <span class="material-icons ml-10">chat_bubble_outline</span> <span class="ml-3 vertical-align-top">40</span>
        </div>
      </div>
    </div>
  </div>
  <!-- News 1 -->
  <div class="col s12 m6 l4">
    <div class="card-panel border-radius-6 white-text bg-image-3 pb-4">
      <p class="mt-0 mb-8"><b>Macro Infrared</b> Photographs Unlock The Depth Of Green In A Stunning Array Of Canary
        Island Plants</p>
      <div class="row mt-4">
        <div class="col s4 pr-0">
          <a href="#" class="white-text"> Read More</a>
        </div>
        <div class="col s8 mt-1 right-align social-icon">
          <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">444</span>
          <span class="material-icons ml-10">chat_bubble_outline</span> <span class="ml-3 vertical-align-top">23</span>
        </div>
      </div>
    </div>
  </div>
</div>
</div><!-- START RIGHT SIDEBAR NAV -->
<aside id="right-sidebar-nav">
 <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
    <div class="row">
       <div class="slide-out-right-title">
          <div class="col s12 border-bottom-1 pb-0 pt-1">
             <div class="row">
                <div class="col s2 pr-0 center">
                   <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
                </div>
                <div class="col s10 pl-0">
                   <ul class="tabs">
                      <li class="tab col s4 p-0">
                         <a href="#messages" class="active">
                            <span>Messages</span>
                         </a>
                      </li>
                      <li class="tab col s4 p-0">
                         <a href="#settings">
                            <span>Settings</span>
                         </a>
                      </li>
                      <li class="tab col s4 p-0">
                         <a href="#activity">
                            <span>Activity</span>
                         </a>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
       <div class="slide-out-right-body">
          <div id="messages" class="col s12">
             <div class="collection border-none">
                <input class="header-search-input mt-4 mb-2" type="text" name="Search" placeholder="Search Messages" />
                <ul class="collection p-0">
                   <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                      <span class="avatar-status avatar-online avatar-50"
                         ><img src="{{asset('public/template/images/avatar/avatar-7.png')}}" alt="avatar" />
                         <i></i>
                      </span>
                      <div class="user-content">
                         <h6 class="line-height-0">Elizabeth Elliott</h6>
                         <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                      </div>
                      <span class="secondary-content medium-small">5.00 AM</span>
                   </li>
                   <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                      <span class="avatar-status avatar-online avatar-50"
                         ><img src="{{asset('public/template/images/avatar/avatar-1.png')}}" alt="avatar" />
                         <i></i>
                      </span>
                      <div class="user-content">
                         <h6 class="line-height-0">Mary Adams</h6>
                         <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                      </div>
                      <span class="secondary-content medium-small">4.14 AM</span>
                   </li>
                   <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                      <span class="avatar-status avatar-off avatar-50"
                         ><img src="{{asset('public/template/images/avatar/avatar-2.png')}}" alt="avatar" />
                         <i></i>
                      </span>
                      <div class="user-content">
                         <h6 class="line-height-0">Caleb Richards</h6>
                         <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                      </div>
                      <span class="secondary-content medium-small">4.14 AM</span>
                   </li>
                   <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                      <span class="avatar-status avatar-online avatar-50"
                         ><img src="{{asset('public/template/images/avatar/avatar-3.png')}}" alt="avatar" />
                         <i></i>
                      </span>
                      <div class="user-content">
                         <h6 class="line-height-0">Caleb Richards</h6>
                         <p class="medium-small blue-grey-text text-lighten-3 pt-3">Keny !</p>
                      </div>
                      <span class="secondary-content medium-small">9.00 PM</span>
                   </li>
                   <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                      <span class="avatar-status avatar-online avatar-50"
                         ><img src="{{asset('public/template/images/avatar/avatar-4.png')}}" alt="avatar" />
                         <i></i>
                      </span>
                      <div class="user-content">
                         <h6 class="line-height-0">June Lane</h6>
                         <p class="medium-small blue-grey-text text-lighten-3 pt-3">Ohh God</p>
                      </div>
                      <span class="secondary-content medium-small">4.14 AM</span>
                   </li>
                   <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                      <span class="avatar-status avatar-off avatar-50"
                         ><img src="{{asset('public/template/images/avatar/avatar-5.png')}}" alt="avatar" />
                         <i></i>
                      </span>
                      <div class="user-content">
                         <h6 class="line-height-0">Edward Fletcher</h6>
                         <p class="medium-small blue-grey-text text-lighten-3 pt-3">Love you</p>
                      </div>
                      <span class="secondary-content medium-small">5.15 PM</span>
                   </li>
                   <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                      <span class="avatar-status avatar-online avatar-50"
                         ><img src="{{asset('public/template/images/avatar/avatar-6.png')}}" alt="avatar" />
                         <i></i>
                      </span>
                      <div class="user-content">
                         <h6 class="line-height-0">Crystal Bates</h6>
                         <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can we</p>
                      </div>
                      <span class="secondary-content medium-small">8.00 AM</span>
                   </li>
                   <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                      <span class="avatar-status avatar-off avatar-50"
                         ><img src="{{asset('public/template/images/avatar/avatar-7.png')}}" alt="avatar" />
                         <i></i>
                      </span>
                      <div class="user-content">
                         <h6 class="line-height-0">Nathan Watts</h6>
                         <p class="medium-small blue-grey-text text-lighten-3 pt-3">Great!</p>
                      </div>
                      <span class="secondary-content medium-small">9.53 PM</span>
                   </li>
                   <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                      <span class="avatar-status avatar-off avatar-50"
                         ><img src="{{asset('public/template/images/avatar/avatar-8.png')}}" alt="avatar" />
                         <i></i>
                      </span>
                      <div class="user-content">
                         <h6 class="line-height-0">Willard Wood</h6>
                         <p class="medium-small blue-grey-text text-lighten-3 pt-3">Do it</p>
                      </div>
                      <span class="secondary-content medium-small">4.20 AM</span>
                   </li>
                   <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                      <span class="avatar-status avatar-online avatar-50"
                         ><img src="{{asset('public/template/images/avatar/avatar-1.png')}}" alt="avatar" />
                         <i></i>
                      </span>
                      <div class="user-content">
                         <h6 class="line-height-0">Ronnie Ellis</h6>
                         <p class="medium-small blue-grey-text text-lighten-3 pt-3">Got that</p>
                      </div>
                      <span class="secondary-content medium-small">5.20 AM</span>
                   </li>
                   <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                      <span class="avatar-status avatar-online avatar-50"
                         ><img src="{{asset('public/template/images/avatar/avatar-9.png')}}" alt="avatar" />
                         <i></i>
                      </span>
                      <div class="user-content">
                         <h6 class="line-height-0">Daniel Russell</h6>
                         <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                      </div>
                      <span class="secondary-content medium-small">12.00 AM</span>
                   </li>
                   <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                      <span class="avatar-status avatar-off avatar-50"
                         ><img src="{{asset('public/template/images/avatar/avatar-10.png')}}" alt="avatar" />
                         <i></i>
                      </span>
                      <div class="user-content">
                         <h6 class="line-height-0">Sarah Graves</h6>
                         <p class="medium-small blue-grey-text text-lighten-3 pt-3">Okay you</p>
                      </div>
                      <span class="secondary-content medium-small">11.14 PM</span>
                   </li>
                   <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                      <span class="avatar-status avatar-off avatar-50"
                         ><img src="{{asset('public/template/images/avatar/avatar-11.png')}}" alt="avatar" />
                         <i></i>
                      </span>
                      <div class="user-content">
                         <h6 class="line-height-0">Andrew Hoffman</h6>
                         <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can do</p>
                      </div>
                      <span class="secondary-content medium-small">7.30 PM</span>
                   </li>
                   <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                      <span class="avatar-status avatar-online avatar-50"
                         ><img src="{{asset('public/template/images/avatar/avatar-12.png')}}" alt="avatar" />
                         <i></i>
                      </span>
                      <div class="user-content">
                         <h6 class="line-height-0">Camila Lynch</h6>
                         <p class="medium-small blue-grey-text text-lighten-3 pt-3">Leave it</p>
                      </div>
                      <span class="secondary-content medium-small">2.00 PM</span>
                   </li>
                </ul>
             </div>
          </div>
          <div id="settings" class="col s12">
             <p class="mt-8 mb-0 ml-5 font-weight-900">GENERAL SETTINGS</p>
             <ul class="collection border-none">
                <li class="collection-item border-none mt-3">
                   <div class="m-0">
                      <span>Notifications</span>
                      <div class="switch right">
                         <label>
                            <input checked type="checkbox" />
                            <span class="lever"></span>
                         </label>
                      </div>
                   </div>
                </li>
                <li class="collection-item border-none mt-3">
                   <div class="m-0">
                      <span>Show recent activity</span>
                      <div class="switch right">
                         <label>
                            <input type="checkbox" />
                            <span class="lever"></span>
                         </label>
                      </div>
                   </div>
                </li>
                <li class="collection-item border-none mt-3">
                   <div class="m-0">
                      <span>Show recent activity</span>
                      <div class="switch right">
                         <label>
                            <input type="checkbox" />
                            <span class="lever"></span>
                         </label>
                      </div>
                   </div>
                </li>
                <li class="collection-item border-none mt-3">
                   <div class="m-0">
                      <span>Show Task statistics</span>
                      <div class="switch right">
                         <label>
                            <input type="checkbox" />
                            <span class="lever"></span>
                         </label>
                      </div>
                   </div>
                </li>
                <li class="collection-item border-none mt-3">
                   <div class="m-0">
                      <span>Show your emails</span>
                      <div class="switch right">
                         <label>
                            <input type="checkbox" />
                            <span class="lever"></span>
                         </label>
                      </div>
                   </div>
                </li>
                <li class="collection-item border-none mt-3">
                   <div class="m-0">
                      <span>Email Notifications</span>
                      <div class="switch right">
                         <label>
                            <input checked type="checkbox" />
                            <span class="lever"></span>
                         </label>
                      </div>
                   </div>
                </li>
             </ul>
             <p class="mt-8 mb-0 ml-5 font-weight-900">SYSTEM SETTINGS</p>
             <ul class="collection border-none">
                <li class="collection-item border-none mt-3">
                   <div class="m-0">
                      <span>System Logs</span>
                      <div class="switch right">
                         <label>
                            <input type="checkbox" />
                            <span class="lever"></span>
                         </label>
                      </div>
                   </div>
                </li>
                <li class="collection-item border-none mt-3">
                   <div class="m-0">
                      <span>Error Reporting</span>
                      <div class="switch right">
                         <label>
                            <input type="checkbox" />
                            <span class="lever"></span>
                         </label>
                      </div>
                   </div>
                </li>
                <li class="collection-item border-none mt-3">
                   <div class="m-0">
                      <span>Applications Logs</span>
                      <div class="switch right">
                         <label>
                            <input checked type="checkbox" />
                            <span class="lever"></span>
                         </label>
                      </div>
                   </div>
                </li>
                <li class="collection-item border-none mt-3">
                   <div class="m-0">
                      <span>Backup Servers</span>
                      <div class="switch right">
                         <label>
                            <input type="checkbox" />
                            <span class="lever"></span>
                         </label>
                      </div>
                   </div>
                </li>
                <li class="collection-item border-none mt-3">
                   <div class="m-0">
                      <span>Audit Logs</span>
                      <div class="switch right">
                         <label>
                            <input type="checkbox" />
                            <span class="lever"></span>
                         </label>
                      </div>
                   </div>
                </li>
             </ul>
          </div>
          <div id="activity" class="col s12">
             <div class="activity">
                <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
                <ul class="collection with-header">
                   <li class="collection-item">
                      <div class="font-weight-900">
                         Homepage mockup design <span class="secondary-content">Just now</span>
                      </div>
                      <p class="mt-0 mb-2">Melissa liked your activity.</p>
                      <span class="new badge amber" data-badge-caption="Important"> </span>
                   </li>
                   <li class="collection-item">
                      <div class="font-weight-900">
                         Melissa liked your activity Drinks. <span class="secondary-content">10 mins</span>
                      </div>
                      <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                      <span class="new badge light-green" data-badge-caption="Resolved"></span>
                   </li>
                   <li class="collection-item">
                      <div class="font-weight-900">
                         12 new users registered <span class="secondary-content">30 mins</span>
                      </div>
                      <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                   </li>
                   <li class="collection-item">
                      <div class="font-weight-900">
                         Tina is attending your activity <span class="secondary-content">2 hrs</span>
                      </div>
                      <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                   </li>
                   <li class="collection-item">
                      <div class="font-weight-900">
                         Josh is now following you <span class="secondary-content">5 hrs</span>
                      </div>
                      <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                      <span class="new badge red" data-badge-caption="Pending"></span>
                   </li>
                </ul>
                <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
                <ul class="collection with-header">
                   <li class="collection-item">
                      <div class="font-weight-900">
                         New order received urgent <span class="secondary-content">Just now</span>
                      </div>
                      <p class="mt-0 mb-2">Melissa liked your activity.</p>
                   </li>
                   <li class="collection-item">
                      <div class="font-weight-900">System shutdown. <span class="secondary-content">5 min</span></div>
                      <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                      <span class="new badge blue" data-badge-caption="Urgent"> </span>
                   </li>
                   <li class="collection-item">
                      <div class="font-weight-900">
                         Database overloaded 89% <span class="secondary-content">20 min</span>
                      </div>
                      <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                   </li>
                </ul>
                <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
                <ul class="collection with-header">
                   <li class="collection-item">
                      <div class="font-weight-900">System error <span class="secondary-content">10 min</span></div>
                      <p class="mt-0 mb-2">Melissa liked your activity.</p>
                   </li>
                   <li class="collection-item">
                      <div class="font-weight-900">
                         Production server down. <span class="secondary-content">1 hrs</span>
                      </div>
                      <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                      <span class="new badge blue" data-badge-caption="Urgent"></span>
                   </li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </div>

 <!-- Slide Out Chat -->
 <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
    <li class="center-align pt-2 pb-2 sidenav-close chat-head">
       <a href="#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
    </li>
    <li class="chat-body">
       <ul class="collection">
          <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
             <span class="avatar-status avatar-online avatar-50"
                ><img src="{{asset('public/template/images/avatar/avatar-7.png')}}" alt="avatar" />
             </span>
             <div class="user-content speech-bubble">
                <p class="medium-small">hello!</p>
             </div>
          </li>
          <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
             <div class="user-content speech-bubble-right">
                <p class="medium-small">How can we help? We're here for you!</p>
             </div>
          </li>
          <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
             <span class="avatar-status avatar-online avatar-50"
                ><img src="{{asset('public/template/images/avatar/avatar-7.png')}}" alt="avatar" />
             </span>
             <div class="user-content speech-bubble">
                <p class="medium-small">I am looking for the best admin template.?</p>
             </div>
          </li>
          <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
             <div class="user-content speech-bubble-right">
                <p class="medium-small">Materialize admin is the responsive materializecss admin template.</p>
             </div>
          </li>

          <li class="collection-item display-grid width-100 center-align">
             <p>8:20 a.m.</p>
          </li>

          <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
             <span class="avatar-status avatar-online avatar-50"
                ><img src="{{asset('public/template/images/avatar/avatar-7.png')}}" alt="avatar" />
             </span>
             <div class="user-content speech-bubble">
                <p class="medium-small">Ohh! very nice</p>
             </div>
          </li>
          <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
             <div class="user-content speech-bubble-right">
                <p class="medium-small">Thank you.</p>
             </div>
          </li>
          <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
             <span class="avatar-status avatar-online avatar-50"
                ><img src="{{asset('public/template/images/avatar/avatar-7.png')}}" alt="avatar" />
             </span>
             <div class="user-content speech-bubble">
                <p class="medium-small">How can I purchase it?</p>
             </div>
          </li>

          <li class="collection-item display-grid width-100 center-align">
             <p>9:00 a.m.</p>
          </li>

          <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
             <div class="user-content speech-bubble-right">
                <p class="medium-small">From ThemeForest.</p>
             </div>
          </li>
          <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
             <div class="user-content speech-bubble-right">
                <p class="medium-small">Only $24</p>
             </div>
          </li>
          <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
             <span class="avatar-status avatar-online avatar-50"
                ><img src="{{asset('public/template/images/avatar/avatar-7.png')}}" alt="avatar" />
             </span>
             <div class="user-content speech-bubble">
                <p class="medium-small">Ohh! Thank you.</p>
             </div>
          </li>
          <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
             <span class="avatar-status avatar-online avatar-50"
                ><img src="{{asset('public/template/images/avatar/avatar-7.png')}}" alt="avatar" />
             </span>
             <div class="user-content speech-bubble">
                <p class="medium-small">I will purchase it for sure.</p>
             </div>
          </li>
          <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
             <div class="user-content speech-bubble-right">
                <p class="medium-small">Great, Feel free to get in touch on</p>
             </div>
          </li>
          <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
             <div class="user-content speech-bubble-right">
                <p class="medium-small">https://pixinvent.ticksy.com/</p>
             </div>
          </li>
       </ul>
    </li>
    <li class="center-align chat-footer">
       <form class="col s12" onsubmit="slide_out_chat()" action="javascript:void(0);">
          <div class="input-field">
             <input id="icon_prefix" type="text" class="search" />
             <label for="icon_prefix">Type here..</label>
             <a onclick="slide_out_chat()"><i class="material-icons prefix">send</i></a>
          </div>
       </form>
    </li>
 </ul>
</aside>
<!-- END RIGHT SIDEBAR NAV -->
          <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
  <ul>
      <li><a href="css-helpers.html" class="btn-floating blue"><i class="material-icons">help_outline</i></a></li>
      <li><a href="cards-extended.html" class="btn-floating green"><i class="material-icons">widgets</i></a></li>
      <li><a href="app-calendar.html" class="btn-floating amber"><i class="material-icons">today</i></a></li>
      <li><a href="app-email.html" class="btn-floating red"><i class="material-icons">mail_outline</i></a></li>
  </ul>
</div>
        </div>
      </div>
    </div>
  </div>
  @endsection
