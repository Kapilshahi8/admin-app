@extends('layouts.admin')
@section('content')
<div class="card">
    <!------------------ Hover Effect Style : Demo - 1 --------------->
    <div class="container">
            <h4 class="mt-4 ml-4 mb-4">Welcome to my custom dashboard</h4>
        <div class="row">
            
            <div class="col-md-4">
                <div class="dbox dbox--color-1">
                    <div class="dbox__icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <div class="dbox__body">
                        <span class="dbox__count">8,252</span>
                        <span class="dbox__title">Lesson Plan</span>
                    </div>
                    
                    <div class="dbox__action">
                        <button class="dbox__action__btn">More Info</button>
                    </div>				
                </div>
            </div>
            <div class="col-md-4">
                <div class="dbox dbox--color-2">
                    <div class="dbox__icon">
                        <i class="fas fa-download"></i>
                    </div>
                    <div class="dbox__body">
                        <span class="dbox__count">100</span>
                        <span class="dbox__title">Learning Resources</span>
                    </div>
                    
                    <div class="dbox__action">
                        <button class="dbox__action__btn">More Info</button>
                    </div>				
                </div>
            </div>
            <div class="col-md-4">
                <div class="dbox dbox--color-3">
                    <div class="dbox__icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <div class="dbox__body">
                        <span class="dbox__count">2502</span>
                        <span class="dbox__title">Enrichment Content</span>
                    </div>
                    
                    <div class="dbox__action">
                        <button class="dbox__action__btn">More Info</button>
                    </div>				
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-40">
        <div class="row">
            <div class="col-md-6">
                <h4 class="pl-4">Sales Chart</h4>
                <canvas id="canvas"></canvas>
            </div>
            <div class="col-md-6">
                <h4 class="pl-4">Profit Chart</h4>
                <canvas id="chartJSContainer"></canvas>
            </div>
        </div>
        <h3 class="text-center pt-4">Our Team Effect</h3>
        <div class="row mt-40">
            <div class="col-md-4 col-sm-6">
                <div class="box1">
                    <img src="{{ asset('image/img-1.jpg') }}" alt="">
                    <h3 class="title">Williamson</h3>
                    <ul class="icon">
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box1">
                    <img src="{{ asset('image/img-2.jpg') }}" alt=""
                        class="img-thumbn">
                    <h3 class="title">Kristiana</h3>
                    <ul class="icon">
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box1">
                    <img src="{{ asset('image/img-3.jpg') }}" alt="">
                    <h3 class="title">Kristiana</h3>
                    <ul class="icon">
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-40">
        <h3 class="text-center">Our Team Effect</h3>
        <div class="row mt-30">
            <div class="col-md-4 col-sm-6">
                <div class="box6">
                    <img src="{{ asset('image/img-4.jpg') }}" alt="">
                    <div class="box-content">
                        <h3 class="title">Williamson</h3>
                        <span class="post">Web Developer</span>
                        <ul class="icon">
                            <li><a href="#" class="fa fa-search"></a></li>
                            <li><a href="#" class="fa fa-link"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box6">
                    <img src="{{ asset('image/img-5.jpg') }}" alt="">
                    <div class="box-content">
                        <h3 class="title">Kristiana</h3>
                        <span class="post">Web Designer</span>
                        <ul class="icon">
                            <li><a href="#" class="fa fa-search"></a></li>
                            <li><a href="#" class="fa fa-link"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box6">
                    <img src="{{ asset('image/img-6.jpg') }}" alt="">
                    <div class="box-content">
                        <h3 class="title">Kristiana</h3>
                        <span class="post">Web Designer</span>
                        <ul class="icon">
                            <li><a href="#" class="fa fa-search"></a></li>
                            <li><a href="#" class="fa fa-link"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------ Hover Effect Style : Demo - 12 --------------->
    <div class="container mt-40">
        <h3 class="text-center">Hover Effect Style : Demo - 12</h3>
        <div class="row mt-30">
            <div class="col-md-4 col-sm-6">
                <div class="box12">
                    <img src="{{ asset('image/img-7.jpg') }}">
                    <div class="box-content">
                        <h3 class="title">Williamson</h3>
                        <ul class="icon">
                            <li><a href="#"><i class="fa fa-search"></i></a></li>
                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box12">
                    <img src="{{ asset('image/img-1.jpg') }}">
                    <div class="box-content">
                        <h3 class="title">Williamson</h3>
                        <ul class="icon">
                            <li><a href="#"><i class="fa fa-search"></i></a></li>
                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box12">
                    <img src="{{ asset('image/img-4.jpg') }}">
                    <div class="box-content">
                        <h3 class="title">Kristiana</h3>
                        <ul class="icon">
                            <li><a href="#"><i class="fa fa-search"></i></a></li>
                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------ Hover Effect Style : Demo - 14 --------------->
    <div class="container mt-40">
        <h3 class="text-center">Hover Effect Style : Demo - 14</h3>
        <div class="row mt-30">
            <div class="col-md-4 col-sm-6">
                <div class="box14">
                    <img src="{{ asset('image/img-5.jpg') }}" alt="">
                    <div class="box-content">
                        <h3 class="title">Williamson</h3>
                        <span class="post">Web Developer</span>
                        <ul class="icon">
                            <li><a href="#"><i class="fa fa-search"></i></a></li>
                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box14">
                    <img src="{{ asset('image/img-7.jpg') }}" alt="">
                    <div class="box-content">
                        <h3 class="title">Kristiana</h3>
                        <span class="post">Web Designer</span>
                        <ul class="icon">
                            <li><a href="#"><i class="fa fa-search"></i></a></li>
                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box14">
                    <img src="{{ asset('image/img-1.jpg') }}" alt="">
                    <div class="box-content">
                        <h3 class="title">Kristiana</h3>
                        <span class="post">Web Designer</span>
                        <ul class="icon">
                            <li><a href="#"><i class="fa fa-search"></i></a></li>
                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------ Hover Effect Style : Demo - 15 --------------->
    <div class="container mt-40">
        <h3 class="text-center">Our Team</h3>
        <div class="row mt-30">
            <div class="col-md-3 col-sm-6">
                <div class="box15">
                    <img src="{{ asset('image/user-img-1.jpg') }}" alt="">
                    <div class="box-content">
                        <h3 class="title">Williamson</h3>
                        <ul class="icon">
                            <li><a href="#"><i class="fa fa-search"></i></a></li>
                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="box15">
                    <img src="{{ asset('image/user-img-4.jpg') }}" alt="">
                    <div class="box-content">
                        <h3 class="title">Kristiana</h3>
                        <ul class="icon">
                            <li><a href="#"><i class="fa fa-search"></i></a></li>
                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="box15">
                    <img src="{{ asset('image/user-img-3.jpg') }}" alt="">
                    <div class="box-content">
                        <h3 class="title">Kristiana</h3>
                        <ul class="icon">
                            <li><a href="#"><i class="fa fa-search"></i></a></li>
                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="box15">
                    <img src="{{ asset('image/user-img-2.jpg') }}" alt="">
                    <div class="box-content">
                        <h3 class="title">Kristiana</h3>
                        <ul class="icon">
                            <li><a href="#"><i class="fa fa-search"></i></a></li>
                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/chart.js') }}"></script>
<script src="{{ asset('js/custom-chart.js') }}"></script>
@parent

@endsection