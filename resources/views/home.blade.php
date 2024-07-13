@extends('layouts.app')

@section('body')
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
          
 
@endsection
    



