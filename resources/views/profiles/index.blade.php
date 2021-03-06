<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
   @extends('layouts.pttest')
@section('title', "| Petagram photos")

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../../favicon.ico">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto+Slab:300,400,700%7COpen+Sans:400,600,700">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/icon-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/icon-line/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/icon-line-pro/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/icon-hs/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fancybox/jquery.fancybox.css') }}">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/revolution-slider/revolution/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('revolution-slider/carousel-gallery/assets/css/style.css') }}">

    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.bm-classic.css') }}">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

  </head>

  <body>
    <main>
 
      <!-- Header -->
      <header id="js-header" class="u-header u-header--static u-shadow-v19">
        <!-- Top Bar -->
        <div class="u-header__section g-brd-bottom g-brd-gray-light-v4 g-py-18">
          <div class="container">
            <div class="row align-items-center">
              <!-- Logo -->
              <div class="col-md-3 g-hidden-md-down">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                   <div><img src="/svg/PetagramLogo.svg" style="height: 20px;border-right: 1px solid #333" class="pr-3"></div>
                   <div class="pl-3" style="padding-top: 2px;">Petagram</div>
                </a>
              </div>
              <!-- End Logo -->

              <!-- Search Form -->
              <div class="col-6 col-md-5">
                <form class="input-group rounded">
                  <input class="form-control g-brd-secondary-light-v2 g-brd-primary--focus g-color-secondary-dark-v1 g-placeholder-secondary-dark-v1 g-bg-white g-font-weight-400 g-font-size-13 g-px-20 g-py-12" type="text" placeholder="Search the entire site">
                  <span class="input-group-append g-brd-none g-py-0 g-pr-0">
                    <button class="btn u-btn-white g-color-primary--hover g-bg-secondary g-font-weight-600 g-font-size-13 text-uppercase g-py-12 g-px-20" type="submit">
                      <span class="g-hidden-md-down">Search</span>
                      <i class="g-hidden-lg-up fa fa-search"></i>
                    </button>
                  </span>
                </form>
              </div>
              <!-- End Search Form -->

              <!-- Language -->
              <div class="col-4 col-lg-2 g-pos-rel g-px-15 ml-auto" >
                <a id="languages-dropdown-invoker" class="g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover" href="#!"
                   aria-controls="languages-dropdown"
                   aria-haspopup="true"
                   aria-expanded="false"
                   data-dropdown-event="hover"
                   data-dropdown-target="#languages-dropdown"
                   data-dropdown-type="css-animation"
                   data-dropdown-duration="300"
                   data-dropdown-hide-on-scroll="false"
                   data-dropdown-animation-in="fadeIn"
                   data-dropdown-animation-out="fadeOut">
                  <svg xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                    <defs>
                      <clipPath id="a">
                        <path fill-opacity=".67" d="M-85.333 0h682.67v512h-682.67z"/>
                      </clipPath>
                    </defs>
                    <g clip-path="url(#a)" transform="translate(80) scale(.94)">
                      <g stroke-width="1pt">
                        <path fill="#006" d="M-256 0H768.02v512.01H-256z"/>
                        <path d="M-256 0v57.244l909.535 454.768H768.02V454.77L-141.515 0H-256zM768.02 0v57.243L-141.515 512.01H-256v-57.243L653.535 0H768.02z" fill="#fff"/>
                        <path d="M170.675 0v512.01h170.67V0h-170.67zM-256 170.67v170.67H768.02V170.67H-256z" fill="#fff"/>
                        <path d="M-256 204.804v102.402H768.02V204.804H-256zM204.81 0v512.01h102.4V0h-102.4zM-256 512.01L85.34 341.34h76.324l-341.34 170.67H-256zM-256 0L85.34 170.67H9.016L-256 38.164V0zm606.356 170.67L691.696 0h76.324L426.68 170.67h-76.324zM768.02 512.01L426.68 341.34h76.324L768.02 473.848v38.162z" fill="#c00"/>
                      </g>
                    </g>
                  </svg>
                  <span>English</span> <i class="g-hidden-sm-down fa fa-angle-down g-ml-7"></i>
                </a>

                <ul id="languages-dropdown" class="list-unstyled g-width-160 g-brd-around g-brd-secondary-light-v2 g-bg-white rounded g-pos-abs g-py-5 g-mt-32"
                    aria-labelledby="languages-dropdown-invoker">
                  <li>
                    <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="#!">
                      <svg class="mr-1 g-ml-minus-6" xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                        <defs>
                          <clipPath id="a">
                            <path fill-opacity=".67" d="M-85.333 0h682.67v512h-682.67z"/>
                          </clipPath>
                        </defs>
                        <g clip-path="url(#a)" transform="translate(80) scale(.94)">
                          <g stroke-width="1pt">
                            <path fill="#006" d="M-256 0H768.02v512.01H-256z"/>
                            <path d="M-256 0v57.244l909.535 454.768H768.02V454.77L-141.515 0H-256zM768.02 0v57.243L-141.515 512.01H-256v-57.243L653.535 0H768.02z" fill="#fff"/>
                            <path d="M170.675 0v512.01h170.67V0h-170.67zM-256 170.67v170.67H768.02V170.67H-256z" fill="#fff"/>
                            <path d="M-256 204.804v102.402H768.02V204.804H-256zM204.81 0v512.01h102.4V0h-102.4zM-256 512.01L85.34 341.34h76.324l-341.34 170.67H-256zM-256 0L85.34 170.67H9.016L-256 38.164V0zm606.356 170.67L691.696 0h76.324L426.68 170.67h-76.324zM768.02 512.01L426.68 341.34h76.324L768.02 473.848v38.162z" fill="#c00"/>
                          </g>
                        </g>
                      </svg>
                      English
                    </a>
                  </li>
                  <li>
                    <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="#!">
                      <svg class="mr-1 g-ml-minus-6" xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                        <g stroke-width="1pt" fill-rule="evenodd">
                          <path fill="#fff" d="M0 0h640v480H0z"/>
                          <path fill="#00267f" d="M0 0h213.33v480H0z"/>
                          <path fill="#f31830" d="M426.67 0H640v480H426.67z"/>
                        </g>
                      </svg>
                      Spanish
                    </a>
                  </li>
                  <li>
                    <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="#!">
                      <svg class="mr-1 g-ml-minus-6" xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                        <g fill-rule="evenodd" stroke-width="1pt">
                          <path fill="#fff" d="M0 0h640v480H0z"/>
                          <path fill="#0039a6" d="M0 160.003h640V480H0z"/>
                          <path fill="#d52b1e" d="M0 319.997h640V480H0z"/>
                        </g>
                      </svg>
                      Russian
                    </a>
                  </li>
                  <li>
                    <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="#!">
                      <svg class="mr-1 g-ml-minus-6" xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                        <path fill="#ffce00" d="M0 320h640v160.002H0z"/>
                        <path d="M0 0h640v160H0z"/>
                        <path fill="#d00" d="M0 160h640v160H0z"/>
                      </svg>
                      German
                    </a>
                  </li>
                </ul>
              </div>
              <!-- End Language -->

              <!-- Account -->
              <div class="col-1">
                <a id="account-dropdown-invoker" class="media align-items-center float-right g-text-underline--none--hover" href="#!"
                   aria-controls="account-dropdown"
                   aria-haspopup="true"
                   aria-expanded="false"
                   data-dropdown-event="hover"
                   data-dropdown-target="#account-dropdown"
                   data-dropdown-type="css-animation"
                   data-dropdown-duration="300"
                   data-dropdown-hide-on-scroll="false"
                   data-dropdown-animation-in="fadeIn"
                   data-dropdown-animation-out="fadeOut">
                  
                  <div class="d-flex g-width-30 g-height-30 mr-2">
                    
                    <img class="img-fluid rounded-circle" src="/storage/{{ Auth::user()->profile->image }}" alt="Image Description">
                    
                  </div>
                  @guest
                  @if (Route::has('register'))
                  New guest
                  @endif
                  @else
                  <div class="media-body">
                    <span class="d-block g-hidden-sm-down g-color-main g-font-weight-600 g-font-size-13">{{ Auth::user()->username }}</span>
                  </div>
                  @endguest
                </a>



               

                <ul id="account-dropdown" class="list-unstyled text-right g-width-160 g-brd-around g-brd-secondary-light-v2 g-bg-white rounded g-pos-abs g-right-0 g-py-5 g-mt-57"
                    aria-labelledby="account-dropdown-invoker">
                        <!-- Authentication Links -->
                        @guest
                            <li >
                                <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                           <li>
                            <!--    <a id="navbarDropdown" class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <i style="color: #191919" class="far fa-user-circle"></i>
                                    <span style="color: #191919">{{ Auth::user()->username }}</span> <span class="caret"></span>
                                </a> -->
                               

                                
                                     <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="/profile/{{ Auth::user()->id }}">
                                      <i class="icon-finance-067 u-line-icon-pro" style="padding-right: 5px"></i>
                                        {{ Auth::user()->username }}'s{{ __(' profile') }}

                                    </a>
                                     <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="{{ route('tags.index') }}">
                                      <i class="icon-tag" style="padding-right: 5px"></i>
                                        {{ __('Tags') }}

                                    </a>
                                    <hr style="margin-top: 10px;margin-bottom: 10px">
                                    <a class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="icon-logout"style="padding-right: 5px" ></i>
                                        {{ __('Logout') }}
                                    </a>

                                   

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                            </li>
                        @endguest
                    </ul>
              </div>
              <!-- End Account -->
            </div>
          </div>
        </div>
        <!-- End Top Bar -->

        <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10" style="display: none;">
          <nav class="js-mega-menu navbar navbar-expand-lg g-px-0">
            <div class="container g-px-15">
              <!-- Logo -->
              <a class="navbar-brand g-hidden-lg-up" href="bm-classic-home-page-1.html">
                <img src="assets/img/logo.png" alt="Logo">
              </a>
              <!-- End Logo -->

              <!-- Responsive Toggle Button -->
              <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 ml-auto" type="button"
                      aria-label="Toggle navigation"
                      aria-expanded="false"
                      aria-controls="navBar"
                      data-toggle="collapse"
                      data-target="#navBar">
                <span class="hamburger hamburger--slider g-pa-0">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
              </button>
              <!-- End Responsive Toggle Button -->

           

                   
@section('content')
<div class="container">
 
   <div class="g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-40">
              <div class="row">
                <div class="col-lg-4 g-mb-40 g-mb-0--lg">
                  <!-- User Image -->
                  <div class="g-mb-20">
                    <img class="rounded-circle ml-5" style="max-height: 250px;max-width: 250px" src="/storage/{{ $user->profile->profileImage()}}">
                  </div>
                  <!-- User Image -->

                  <!-- User Contact Buttons -->
                  
               <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button> 
               
              <!--    <a class="btn btn-block u-btn-darkgray g-rounded-50 g-py-12 g-mb-10" href="#!">
                    <i class="icon-call-in g-pos-rel g-top-1 g-mr-5"></i> Contact Me
                  </a> -->
                  @can('update', $user->profile)
                   <a class="btn btn-block u-btn-outline-mint g-rounded-50 g-py-12 g-mb-10" href="/post/create" style="border: 1px solid #18ba9b">
                    <i class="icon-note g-pos-rel g-top-1 g-mr-5"></i> Add a new post
                  </a>
                  <a class="btn btn-block g-brd-orange u-btn-outline-orange g-rounded-50 g-py-12 g-mb-10" href="/profile/{{ $user->id}}/edit">
                    <i class="icon-pencil g-pos-rel g-top-1 g-mr-5"></i> Edit profile
                  </a>
                  <a class="btn btn-block u-btn-outline-red g-rounded-50 g-py-12 g-mb-10" href="/profile/delete/{{ $user->id}}" style="border: 1px solid red">
                    <i class="icon-trash g-pos-rel g-top-1 g-mr-5"></i> Delete profile
                  </a> 
                  @endcan
                  <!-- End User Contact Buttons -->
                </div>

                 
                
                <div class="col-lg-8">
                  <!-- User Details -->
                  <div class="d-flex align-items-center justify-content-sm-between g-mb-5">
                  <h2 class="g-font-weight-300 g-mr-10">
                    <i class="icon-finance-067 u-line-icon-pro g-pos-rel g-top-1 g-mr-5 g-color-gray-dark-v5" style="font-size: 0.9rem"></i>
                  {{ $user->username }}</h2>
                    <span class="g-color-black-opacity-0_7 g-pos-rel g-top-2 mx-2">&#183;</span>
                     <div class="d-flex">
               <div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
                <div class="pr-5"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>
           </div>

                    <ul class="list-inline mb-0">
                      <li class="list-inline-item g-mx-2">
                        <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-gray-light-v1 g-bg-gray-light-v5 g-color-gray-light-v1--hover rounded-circle" href="{{ $user->facebook }}">
                          <i class="g-font-size-default g-line-height-1 u-icon__elem-regular icon-social-facebook"></i>
                          <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover icon-social-facebook"></i>
                        </a>
                      </li>
                      <li class="list-inline-item g-mx-2">
                        <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-gray-light-v1 g-bg-gray-light-v5 g-color-gray-light-v1--hover rounded-circle" href="{{ $user->instagram }}">
                          <i class="g-font-size-default g-line-height-1 u-icon__elem-regular icon-social-instagram"></i>
                          <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover icon-social-instagram"></i>
                        </a>
                      </li>
                      <li class="list-inline-item g-mx-2">
                        <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-gray-light-v1 g-bg-gray-light-v5 g-color-gray-light-v1--hover rounded-circle" href="{{ $user->twitter }}">
                          <i class="g-font-size-default g-line-height-1 u-icon__elem-regular icon-social-twitter"></i>
                          <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover icon-social-twitter"></i>
                        </a>
                      </li>
                      <li class="list-inline-item g-mx-2">
                        <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-gray-light-v1 g-bg-gray-light-v5 g-color-gray-light-v1--hover rounded-circle" href="{{ $user->pinterest }}">
                          <i class="g-font-size-default g-line-height-1 u-icon__elem-regular icon-social-pinterest"></i>
                          <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover icon-social-pinterest"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                 
                  <!-- End User Details -->
                  @if(!empty($user->profile->function) )
                  @if(!empty($user->profile->company) )
                  <!-- User Position -->
                  <h4 class="h6 g-font-weight-300 g-mb-10">
                      <i class="icon-badge g-pos-rel g-top-1 g-mr-5 g-color-gray-dark-v5"></i><strong>{{ $user->profile->function }}</strong> at <strong>{{ $user->profile->company }}</strong>
                    </h4>
                    @endif
                    @endif
                  <!-- End User Position -->

                  <!-- User Info -->
                  <ul class="list-inline g-font-weight-300">
                    @if(!empty($user->profile->location) )
                    <li class="list-inline-item g-mr-20">
                      <i class="icon-real-estate-020 u-line-icon-pro g-pos-rel g-top-1 g-color-gray-dark-v5 g-mr-5"></i> {{ $user->profile->location }}
                    </li>
                    @endif
                    <li class="list-inline-item g-mr-20">
                      <i class="icon-check g-pos-rel g-top-1 g-color-gray-dark-v5 g-mr-5"></i> Verified User
                    </li>
                    @if(!empty($user->profile->url))
                    <li class="list-inline-item g-mr-20">
                      <i class="icon-link g-pos-rel g-top-1 g-color-gray-dark-v5 g-mr-5"></i>  <a class="g-color-main g-color-primary--hover" href="{{ $user->profile->url }}" target="_blank">{{ $user->profile->url }}</a>

                    </li>
                    @endif
                  </ul>
                  <!-- End User Info -->

                  <hr class="g-brd-gray-light-v4 g-my-20">
                  <div class="pb-3" style="font-weight: bold">{{ $user->profile->title }}</div>
                  <p class="lead g-line-height-1_8">{{ $user->profile->description }}</p>

                  <hr class="g-brd-gray-light-v4 g-my-20">

                  <!-- User Skills -->
                  <div class="d-flex flex-wrap text-center">
                    <div class="input-group g-mb-25 col-md-6">
    <div class="input-group-prepend">
       
     <button class="btn btn-primary" onclick="myFunction()" onmouseout="outFunc()">
      <span class="tooltiptext" id="myTooltip">Copy</span>
   
  </button>
    </div>
    <input type="text" class="form-control form-control-md" value="localhost:8000/profile/{{ $user->id }}"  aria-describedby="basic-addon1"  id="myInput" >
  </div>
                    <div class="input-group g-mb-25 col-md-6">

    <div class="input-group-prepend">
     <a target="_top" onclick="sendMail()" > <button class="btn btn-primary">
      <span class="tooltiptext" id="myTooltip">Send mail</span>
   
  </button></a>
     
    </div>

    <input type="text" class="form-control form-control-md" value="{{ $user->email }}" aria-describedby="basic-addon1" id="myEmail">
  </div>
                    <div class="input-group g-mb-25 col-md-6">
    <div class="input-group-prepend">
      <label class="input-group-text g-bg-white" for="inputGroupSelect01">@</label>
    </div>
    <input type="text" class="form-control form-control-md" placeholder="Coming soon" aria-describedby="basic-addon1" disabled="">
  </div>
                    <div class="input-group g-mb-25 col-md-6">
    <div class="input-group-prepend">
      <label class="input-group-text g-bg-white" for="inputGroupSelect01">@</label>
    </div>
    <input type="text" class="form-control form-control-md" placeholder="Coming soon" aria-describedby="basic-addon1" disabled="">
  </div>
                  </div>
                  <!-- End User Skills -->
                </div>
              </div>
            </div>

          

      <div class="row pt-5">
        @foreach($user->posts as $post)

<div class="col-md-4 pb-4">
        <a href="/post/{{ $post->id }}">
       <img class="w-100" src="/storage/{{ $post->image }}">
     </a>
   </div>
        @endforeach
  
  
   
  </div>
</div>

@endsection
      

      <!-- Go To -->
      <a class="js-go-to u-go-to-v2" href="#!"
         data-type="fixed"
         data-position='{
           "bottom": 15,
           "right": 15
         }'
         data-offset-top="400"
         data-compensation="#js-header"
         data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
      </a>
      <!-- End Go To -->
    </main>

    <div class="u-outer-spaces-helper"></div>

    <!-- JS Global Compulsory -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-migrate/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{ asset('assets/vendor/appear.js') }}"></script>
    <script src="{{ asset('assets/vendor/slick-carousel/slick/slick.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.js') }}"></script>
    <script src="{{ asset('assets/vendor/fancybox/jquery.fancybox.min.js') }}"></script>
    <script  src="{{ asset('assets/vendor/circles/circles.min.js') }}"></script>


    <!-- JS Unify -->
    <script src="{{ asset('assets/js/hs.core.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.header.js') }}"></script>
    <script src="{{ asset('assets/js/helpers/hs.hamburgers.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.dropdown.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.go-to.js') }}"></script>
    <script src="{{ asset('assets/js/components/hs.popup.js') }}"></script>
    <script  src="{{ asset('assets/js/components/hs.chart-pie.js')}}"></script>
    <script  src="{{ asset('assets/js/components/hs.counter.js')}}"></script>

    <!-- JS Revolution Slider -->
    <script src="{{ asset('assets/vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

    <!-- JS Customization -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
     
      $(document).on('ready', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of MegaMenu
        $('.js-mega-menu').HSMegaMenu();

        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
          afterOpen: function () {
            $(this).find('input[type="search"]').focus();
          }
        });

        // initialization of carousel
        $.HSCore.components.HSCarousel.init('[class*="js-carousel"]');

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
      });

      // Revolution Slider
      var tpj = jQuery,
        revAPI;

      tpj(document).ready(function () {
        if (tpj('#revSlider').revolution == undefined) {
          revslider_showDoubleJqueryError('#revSlider');
        } else {
          revAPI = tpj('#revSlider').show().revolution({
            sliderType: 'carousel',
            jsFileLocation: 'revolution/js/',
            sliderLayout: 'fullscreen',
            dottedOverlay: 'none',
            delay: 9000,
            navigation: {
              keyboardNavigation: 'off',
              keyboard_direction: 'horizontal',
              mouseScrollNavigation: 'off',
              mouseScrollReverse: 'default',
              onHoverStop: 'on',
              thumbnails: {
                style: 'gyges',
                enable: true,
                width: 50,
                height: 50,
                min_width: 50,
                wrapper_padding: 5,
                wrapper_color: 'transparent',
               
                visibleAmount: 5,
                hide_onmobile: false,
                hide_over: 992,
                hide_onleave: false,
                direction: 'horizontal',
                span: false,
                position: 'inner',
                space: 5,
                h_align: 'center',
                v_align: 'top',
                h_offset: 0,
                v_offset: 20
              },
              tabs: {
                style: 'gyges',
                enable: true,
                width: 270,
                height: 130,
                min_width: 270,
                wrapper_padding: 0,
                wrapper_color: 'transparent',
               
                visibleAmount: 5,
                hide_onmobile: true,
                hide_under: 992,
                hide_onleave: false,
                hide_delay: 200,
                direction: 'vertical',
                span: true,
                position: 'inner',
                space: 0,
                h_align: 'right',
                v_align: 'center',
                h_offset: 0,
                v_offset: 0
              }
            },
            carousel: {
              horizontal_align: 'center',
              vertical_align: 'center',
              fadeout: 'off',
              maxVisibleItems: 1,
              infinity: 'on',
              space: 0,
              stretch: 'on',
              showLayersAllTime: 'off',
              easing: 'Power3.easeInOut',
              speed: '800'
            },
            responsiveLevels: [1240, 1024, 778, 480],
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: [800, 700, 400, 300],
            gridheight: [600, 600, 500, 400],
            lazyType: 'single',
            shadow: 0,
            spinner: 'off',
            stopLoop: 'off',
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: 'off',
            autoHeight: 'off',
            hideThumbsOnMobile: 'off',
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: 'off',
              nextSlideOnWindowFocus: 'off',
              disableFocusListener: false,
            }
          });
        }
      });


    </script>

  </body>
</html>
