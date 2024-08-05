@extends('layouts.app')

@section('body')
    <section class="bg-gray pt-4 pb-5">
        <div class="container">
            <div class="mb-4">
                <div class="mb-3 d-flex align-items-center justify-content-between">
                    <h2 class="me-4 mb-0">
                        All Discusions
                    </h2>
                    <div>
                        51,456 Discussions
                    </div>
                </div>
                    <a href="#" class="btn btn-primary">Log In To Create Discusions</a>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 mb-5 mb-lg-0">
                    <div class="card card-discussions">
                        <div class="row">
                            <div class="col-12 col-lg-2 mb-1 mb-lg-0 d-flex flex-row flex-lg-column align-items-end">
                                <div class="text-nowrap me-2 me-lg-0">
                                    3 Likes
                                </div>
                                <div class="text-nowrap color-gray">
                                    9 Answers
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <a href="{{ route('discussions.show') }}">
                                    <h3>Lorem ipsum dolor sit amet.</h3>
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita possimus sequi in tempore repudiandae modi.</p>
                                <div class="row">
                                    <div class="col me-1 me-lg-2">
                                        <a href="">
                                            <span class="budge rounded-pill text-bg-light">Eloquent</span>
                                        </a>
                                    </div>
                                    <div class="col-5 col-lg-4">
                                        <div class="avatar-sm-wrapper d-inline-block">
                                            <a href="" class="me-1">
                                                <img src="{{ url('assets/images/avatar-sm.png') }}" alt="radim" class="avatar rounded-circle">
                                            </a>
                                        </div>
                                        <span class="fs-12px">
                                            <a href="#" class="me-1 fw-bold">
                                                radim
                                            </a>
                                            <span class="color-gray">7 Hour ago</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-discussions">
                        <div class="row">
                            <div class="col-12 col-lg-2 mb-1 mb-lg-0 d-flex flex-row flex-lg-column align-items-end">
                                <div class="text-nowrap me-2 me-lg-0">
                                    3 Likes
                                </div>
                                <div class="text-nowrap color-gray">
                                    9 Answers
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <a href="#">
                                    <h3>Lorem ipsum dolor sit amet.</h3>
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita possimus sequi in tempore repudiandae modi.</p>
                                <div class="row">
                                    <div class="col me-1 me-lg-2">
                                        <a href="">
                                            <span class="budge rounded-pill text-bg-light">Eloquent</span>
                                        </a>
                                    </div>
                                    <div class="col-5 col-lg-4">
                                        <div class="avatar-sm-wrapper d-inline-block">
                                            <a href="" class="me-1">
                                                <img src="{{ url('assets/images/avatar-sm.png') }}" alt="radim" class="avatar rounded-circle">
                                            </a>
                                        </div>
                                        <span class="fs-12px">
                                            <a href="#" class="me-1 fw-bold">
                                                radim
                                            </a>
                                            <span class="color-gray">7 Hour ago</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-discussions">
                        <div class="row">
                            <div class="col-12 col-lg-2 mb-1 mb-lg-0 d-flex flex-row flex-lg-column align-items-end">
                                <div class="text-nowrap me-2 me-lg-0">
                                    3 Likes
                                </div>
                                <div class="text-nowrap color-gray">
                                    9 Answers
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <a href="#">
                                    <h3>Lorem ipsum dolor sit amet.</h3>
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita possimus sequi in tempore repudiandae modi.</p>
                                <div class="row">
                                    <div class="col me-1 me-lg-2">
                                        <a href="">
                                            <span class="budge rounded-pill text-bg-light">Eloquent</span>
                                        </a>
                                    </div>
                                    <div class="col-5 col-lg-4">
                                        <div class="avatar-sm-wrapper d-inline-block">
                                            <a href="" class="me-1">
                                                <img src="{{ url('assets/images/avatar-sm.png') }}" alt="radim" class="avatar rounded-circle">
                                            </a>
                                        </div>
                                        <span class="fs-12px">
                                            <a href="#" class="me-1 fw-bold">
                                                radim
                                            </a>
                                            <span class="color-gray">7 Hour ago</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <h3>All Categories</h3>
                        <div>
                            <a href="">
                                <span class="budge rounded-pill text-bg-light">Eloquent</span>
                                <span class="budge rounded-pill text-bg-light">Facede</span>
                                <span class="budge rounded-pill text-bg-light">Helper</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection