<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body >
        <nav class="navbar navbar-dark navbar-expand-lg bg-warning">
            <div class="container flex justify-content-between">
              <a class="navbar-brand h-32px" href="#">Buchat</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-0 mx-lg-3">
                  <li class="nav-item d-block d-lg-none d-xl-block">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link "  href="#">Discussions</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link text-nowrap"  href="#">About Us</a>
                  </li>
                 
                </ul>
                <form class="d-flex w-100 me-4 my-2 my-lg-0" role="search" action="#" method="GET">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><img src="{{ url('assets/images/magnifier.png') }}" alt=""></span>
                        <input class="form-control border-start-0 ps-0" type="search" placeholder="Search" aria-label="Search" name="" value="">
                    </div>
                </form>
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item my-auto">
                        <a class="nav-link text-nowrap"  href="#">Log In</a>
                    </li>
                    <li class="nav-item ps-1 pe-0">
                        <a class="btn btn-primary-white"  href="#">Sign Up</a>
                    </li>
                </ul>
              </div>
            </div>
          </nav>

          {{-- hero --}}
          <section class="container hero">
            <div class="row align-items-center h-100">
              <div class="col-12 col-lg-6">
                <h1>Buchat <br/> Bual Chat</h1>
                <p class="mb-4">sebuah platform dikusi komunitas didalam ruang lingkup</p>
                <a href="#" class="btn btn-primary me-2 mb-2 mb-lg-0">Sign Up</a>
                <a href="#" class="btn btn-secondary mb-2 mb-lg-0">join Bual</a>
              </div>
              <div class="col-12 col-lg-6 h-315px order-first order-lg-last mb-3 mb-lg-0">
                <img class="hero-image float-lg-end" src="{{ url('assets/images/hero-image.jpg') }}" alt="">

              </div>
            </div>
          </section>

          {{-- page promotion --}}
          <section class="container min-h-372px">
            <div class="row">
              <div class="col-12 col-lg-4 text-center">
                <img class="promote-icon mb-2" src="{{ url('assets/images/discussions.png') }}" alt="">
                <h2>Discussions</h2>
                <p class="fs-3">34834</p>
              </div>
              <div class="col-12 col-lg-4 text-center">
                <img class="promote-icon mb-2" src="{{ url('assets/images/answers.png') }}" alt="">
                <h2>Answers</h2>
                <p class="fs-3">34834</p>
              </div>
              <div class="col-12 col-lg-4 text-center">
                <img class="promote-icon mb-2" src="{{ url('assets/images/users.png') }}" alt="">
                <h2>Users</h2>
                <p class="fs-3">34834</p>
              </div>
            </div>
          </section>
          <section class="bg-gray">
            <div class="container py-80px">
              <h2 class="text-center mb-5">apa yang dapat anda temukan</h2>
              <div class="row">
                <div class="col-12 col-lg-4 mb-3">
                  <div class="card">
                    <a href="#">
                      <h3>How To add a custom validation in laravel?</h3>
                    </a>
                    <div class="row">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, asperiores.</p>
                      <div class="row">
                        <div class="col me-1 me-lg-2">
                          <a href="#"><span class="badge rounded-pill text-bg-light">Eloquent</span></a>
                        </div>
                        <div class="col-5 col-lg-7 ">
                          <div class="avatar-sm-wrapper d-inline-block">
                            <a href="" class="me-1">
                              <img src="{{ url('assets/images/avatar-sm.png') }}" alt="">
                            </a>
                          </div>
                          <span class="fs-12px">
                            <a href="#" class="me-1 fw-bold">fajarwz</a>
                            <span class="color-gray">7 hours ago</span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 mb-3">
                  <div class="card">
                    <a href="#">
                      <h3>How To add a custom validation in laravel?</h3>
                    </a>
                    <div class="row">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, asperiores.</p>
                      <div class="row">
                        <div class="col me-1 me-lg-2">
                          <a href="#"><span class="badge rounded-pill text-bg-light">Eloquent</span></a>
                        </div>
                        <div class="col-5 col-lg-7 ">
                          <div class="avatar-sm-wrapper d-inline-block">
                            <a href="" class="me-1">
                              <img src="{{ url('assets/images/avatar-sm.png') }}" alt="">
                            </a>
                          </div>
                          <span class="fs-12px">
                            <a href="#" class="me-1 fw-bold">fajarwz</a>
                            <span class="color-gray">7 hours ago</span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 mb-3">
                  <div class="card">
                    <a href="#">
                      <h3>How To add a custom validation in laravel?</h3>
                    </a>
                    <div class="row">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, asperiores.</p>
                      <div class="row">
                        <div class="col me-1 me-lg-2">
                          <a href="#"><span class="badge rounded-pill text-bg-light">Eloquent</span></a>
                        </div>
                        <div class="col-5 col-lg-7 ">
                          <div class="avatar-sm-wrapper d-inline-block">
                            <a href="" class="me-1">
                              <img src="{{ url('assets/images/avatar-sm.png') }}" alt="">
                            </a>
                          </div>
                          <span class="fs-12px">
                            <a href="#" class="me-1 fw-bold">fajarwz</a>
                            <span class="color-gray">7 hours ago</span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="container min-h-372px d-flex flex-column align-items-center justify-content-center">
            <h2>Ready to contribute?</h2>
            <p class="mb-4">Want to make big a impact?</p>
            <div class="text-center">
              <a href="#" class="btn btn-primary me-2 mb-2 mb-lg-0">Sign Up</a>
              <a href="#" class="btn btn-secondary mb-2 mb-lg-0">join Bual</a>
            </div>
          </section>
          <footer class="py-80px">
            <div class="container">
              <div class="row">
                <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                  <a class="h-32px mb-4" href="#">Buchat</a>
                  <p class="text-white">menjalin kedekatan <br/> bersama Buchat</p>
                </div>
                <div class="col-12 col-lg-6 me-auto">
                  <div class="d-flex flex-column flex-lg-row justify-content-end">
                    <div class="d-flex flex-column me-140px mb-3 mb-lg-0">
                    <p class="fw-bold fs-5 text-white text-nowrap">
                      Contact Us
                    </p>
                    <ul class="list-unstyled">
                      <li class="text-white"><a href="mailto:hi@buchat.com">hi@buchat.com</a></li>
                    </ul>
                    </div>
                
                  <div class="d-flex flex-column">
                    <p class="fw-bold fs-5 text-white">Links</p>
                    <ul class="list-unstyled">
                      <li class="text-white mb-2"><a href="#">Home</a></li>
                      <li class="text-white mb-2"><a href="#">Discussions</a></li>
                      <li class="text-white mb-2"><a href="#">About Us</a></li>
                    </ul>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </footer>

          <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    </body>
</html>
