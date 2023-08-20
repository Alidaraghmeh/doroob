@extends('layout')

@section('content')
<style>
    .rtl-content {
        background: linear-gradient(to bottom, #297ab0, #ffffff);
        height: 500px;
    }
    .image-container {
        position: relative;
    }

    .overlay-image {
        position: absolute;
        border-radius: 20px; /* Increased border radius */
        box-shadow: 30px 10px 25px rgba(0, 0, 0, 0.6); /* Increased shadow */
    }

    .right-image {
        right: 0;
    }

    .left-image {
        left: 0;
    }

    .center-image {
        transform: translateY(50%);
    }
    .card-content{
        padding-top: 50px
    }
    .vv{
        box-shadow: 10px 10px 25px rgba(0, 0, 0, 0.6); /* Increased shadow */
    }
</style>

    @foreach ($sections as $section)
    @if ($section->is_visible === 'is_visible')
    <div class="rtl-content">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="card-content">
                    <h5 class="card-title text-right" style="font-size: 24px;">{{ $section->name }}</h5>
                    <p class="card-text text-right" style="font-size: 18px;">{{ $section->description }}</p>
                </div>
            </div>            
            <div class="col-md-5 mb-4 d-flex align-items-center justify-content-center">
                <div class="image-container">
                    @if ($section->gif)
                    @php
                        $imageUrls = explode(',', $section->gif);
                        $totalImages = count($imageUrls);
                    @endphp
                    @foreach ($imageUrls as $index => $imageUrl)
                        <img src="{{ asset('images/' . trim($imageUrl)) }}" class="overlay-image  {{ $index === 0 ? 'right-image' : ($index === $totalImages - 1 ? 'left-image' : 'center-image') }}" alt="{{ $section->name }}" style="width: {{ 150 + $index * 50 }}px; height: {{ 150 + $index * 50 }}px; margin-right: {{ $index * 20 }}px;">
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
    @endif
    @endforeach


   
<section class="start-section arabic">

        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="statistics">   
                        <style>
       path {
            fill: blue; /* Change this to the desired color */
        }
    </style>
                        <center>
                            <svg width="70" height="76" viewBox="0 0 99 76" fill="none" xmlns="http://www.w3.org/2000/svg" class="pp">
                                <image href="/images/user-solid.svg" width="100%" height="100%" />
                            </svg>  
                            <br><br>
                            <input type="hidden" id="visitors_numbers" value="519521">
                            <b class="text-color-blue"><sup>+</sup><b id="counter-1" class="fw-bold">48453</b></b>
                            <br>
                            <b class="text-color-dark-green">زائر أسبوعياً</b>
                        </center>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="statistics">  
                        <center>
                            <svg width="50" height="77" viewBox="0 0 55 77" fill="none" xmlns="http://www.w3.org/2000/svg" class="pp" >
                                <path d="M51.2952 27.8147C51.325 23.5043 50.2005 19.2646 48.0384 15.5356C45.8763 11.8066 42.7556 8.72431 39 6.60869C35.2445 4.49307 30.9911 3.42125 26.6815 3.50451C22.3719 3.58776 18.1631 4.82305 14.492 7.08214C10.821 9.34123 7.82161 12.5418 5.80518 16.3515C3.78875 20.1612 2.82882 24.4412 3.02504 28.7471C3.22125 33.0531 4.56647 37.2281 6.92103 40.8386C11.1256 47.286 13.6149 49.6561 13.6149 57.3287C13.6149 58.0403 13.8976 58.7228 14.4008 59.226C14.904 59.7292 15.5864 60.0118 16.298 60.0118H37.9966C38.7082 60.0118 39.3907 59.7292 39.8939 59.226C40.397 58.7228 40.6797 58.0403 40.6797 57.3287C40.6797 49.4711 43.4644 47.1385 47.6412 40.4556C50.0111 36.6638 51.2765 32.2861 51.2952 27.8147Z" fill="#E4F2D3" stroke="#52B788" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M19.7843 73.5L34.5108 73.5" stroke="#52B788" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <br><br>
                            <input type="hidden" id="projects_numbers" value="413">
                            <b class="text-color-blue"><sup>+</sup><b id="counter-2" class="fw-bold">413</b></b>
                            <br>
                            <b class="text-color-dark-green">مشروع منفذ</b>
                        </center>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="statistics">  
                        <center>
                            <svg width="70" height="76" viewBox="0 0 99 76" fill="blue" xmlns="http://www.w3.org/2000/svg" class="pp">
                                <image href="/images/users-solid.svg" width="100%" height="100%" />
                                <style>
                                     {
                                        fill:blue; /* Change this to the desired color */
                                    }
                                </style>
                            </svg>
                            <br><br>
                            <input type="hidden" id="students_numbers" value="7959">
                            <b class="text-color-blue"><sup>+</sup><b id="counter-3" class="fw-bold">7959</b></b>
                            <br>
                            <b class="text-color-dark-green">طالب</b>
                        </center>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="statistics">                    
                        <center>
                            <svg width="70" height="76" viewBox="0 0 82 76" fill="none" xmlns="http://www.w3.org/2000/svg" class="pp">
                                <path d="M0.72777 44.9181C-0.354056 46.173 -0.213737 48.0673 1.04118 49.1491C2.2961 50.231 4.1904 50.0906 5.27223 48.8357L0.72777 44.9181ZM76.205 48.8357C77.2868 50.0906 79.1812 50.231 80.4361 49.1491C81.691 48.0673 81.8313 46.173 80.7495 44.9181L76.205 48.8357ZM39.9812 3.97869L37.709 2.01987L39.9812 3.97869ZM41.496 3.97869L43.7683 2.01987L41.496 3.97869ZM5.27223 48.8357L42.2534 5.93751L37.709 2.01987L0.72777 44.9181L5.27223 48.8357ZM39.2238 5.93751L76.205 48.8357L80.7495 44.9181L43.7683 2.01987L39.2238 5.93751ZM42.2534 5.93751C41.4556 6.86301 40.0216 6.86301 39.2238 5.93751L43.7683 2.01987C42.1726 0.168884 39.3047 0.168888 37.709 2.01987L42.2534 5.93751Z" fill="#52B788"></path>
                                <path d="M14.6124 33.4388L39.9804 3.88404C40.3794 3.41913 41.0989 3.41913 41.498 3.88404L66.8659 33.4388L69.3606 51.2355C69.6313 53.1671 69.6181 55.128 69.3212 57.0558L67.127 71.3042C66.9768 72.2797 66.1374 72.9998 65.1503 72.9998H16.328C15.341 72.9998 14.5016 72.2797 14.3513 71.3042L12.1572 57.0558C11.8603 55.128 11.847 53.1671 12.1178 51.2355L14.6124 33.4388Z" fill="#E4F2D3"></path>
                                <path d="M14.6124 33.4388L12.336 31.4848C11.9622 31.9203 11.7212 32.4539 11.6415 33.0223L14.6124 33.4388ZM66.8659 33.4388L69.8369 33.0223C69.7572 32.4539 69.5162 31.9203 69.1424 31.4848L66.8659 33.4388ZM69.3606 51.2355L66.3896 51.6519L69.3606 51.2355ZM39.9804 3.88404L37.704 1.9301L39.9804 3.88404ZM41.498 3.88404L43.7744 1.9301L41.498 3.88404ZM67.127 71.3042L70.0921 71.7608L67.127 71.3042ZM65.1503 69.9998H16.328V75.9998H65.1503V69.9998ZM16.8889 35.3927L42.2568 5.83799L37.704 1.9301L12.336 31.4848L16.8889 35.3927ZM39.2216 5.83799L64.5895 35.3927L69.1424 31.4848L43.7744 1.9301L39.2216 5.83799ZM63.895 33.8552L66.3896 51.6519L72.3315 50.819L69.8369 33.0223L63.895 33.8552ZM66.3561 56.5992L64.162 70.8476L70.0921 71.7608L72.2862 57.5124L66.3561 56.5992ZM17.3164 70.8476L15.1222 56.5992L9.19212 57.5124L11.3863 71.7608L17.3164 70.8476ZM15.0888 51.6519L17.5834 33.8552L11.6415 33.0223L9.14685 50.819L15.0888 51.6519ZM15.1222 56.5992C14.8699 54.9606 14.8586 53.2938 15.0888 51.6519L9.14685 50.819C8.83547 53.0404 8.85072 55.2954 9.19212 57.5124L15.1222 56.5992ZM66.3896 51.6519C66.6198 53.2938 66.6085 54.9606 66.3561 56.5992L72.2862 57.5124C72.6276 55.2954 72.6429 53.0404 72.3315 50.819L66.3896 51.6519ZM42.2568 5.83799C41.4587 6.76782 40.0197 6.76782 39.2216 5.83799L43.7744 1.9301C42.1782 0.0704424 39.3002 0.0704446 37.704 1.9301L42.2568 5.83799ZM16.328 69.9998C16.8216 69.9998 17.2413 70.3598 17.3164 70.8476L11.3863 71.7608C11.7618 74.1996 13.8604 75.9998 16.328 75.9998V69.9998ZM65.1503 75.9998C67.6179 75.9998 69.7165 74.1996 70.0921 71.7608L64.162 70.8476C64.2371 70.3598 64.6568 69.9998 65.1503 69.9998V75.9998Z" fill="#52B788"></path>
                                <path d="M40.7395 44.5742C46.3006 44.5742 50.8088 49.0824 50.8088 54.6435V72.9991H30.6702V54.6435C30.6702 49.0824 35.1784 44.5742 40.7395 44.5742Z" fill="white" stroke="#52B788" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>    
                            <br><br>
                            <input type="hidden" id="schools_numbers" value="243">
                            <b class="text-color-blue"><sup>+</sup><b id="counter-4" class="fw-bold">243</b></b>
                            <br>
                            <b class="text-color-dark-green">مدرسة</b>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @php
                    $visibleServices = $services->where('is_visible', 'is_visible');
                @endphp
                @if ($visibleServices->count() > 0)
                    <div class="container text-center">
                        <h1>خدمات الانتاج</h1>
                    </div>
                    <br><br>
                    <div class="container">
                        <div class="row">
                            @foreach ($visibleServices as $service)
                            <div class="col-md-4 mb-4 animate__animated animate__fadeInUp">
                                <div class="card vv" style="height: 100%;">
                                    @if ($service->gif)
                                    <img src="{{ asset('images/' . $service->gif) }}" class="card-img-top rounded" alt="{{ $service->name }}">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $service->title }}</h5>
                                        <p class="card-text">{{ $service->description }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    
        
        
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @php
                    $visibleNews = $news->where('is_visible', 'is_visible');
                @endphp
                @if ($visibleNews->count() > 0)
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height: 400px;">
                        <div class="container text-center">
                            <h1>أخبار قسم الانتاج</h1>
                        </div>
                        <ol class="carousel-indicators">
                            @foreach ($visibleNews as $index => $new)
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner" style="height: 80%;">
                            @foreach ($visibleNews as $index => $new)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <img class="d-block w-100" src="{{ asset('images/' . $new->image) }}" style="max-height: 350px; object-fit: cover;">
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
    
<br><br>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            @php
                $visibleBusinesses = $busnisses->where('is_visible', 'is_visible');
            @endphp
            @if ($visibleBusinesses->count() > 0)
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height: 400px;">
                    <div class="container text-center">
                        <h1>معرض أعمال الانتاج</h1>
                    </div>
                    <ol class="carousel-indicators">
                        @foreach ($visibleBusinesses as $index => $business)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner" style="height: 80%;">
                        @foreach ($visibleBusinesses as $index => $business)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <img class="d-block w-100" src="{{ asset('images/' . $business->image) }}" style="max-height: 350px; object-fit: cover;">
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>

<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @php
                $visibleProjects = $projects->where('is_visible', 'is_visible');
            @endphp
            @if ($visibleProjects->count() > 0)
                <div class="container text-center">
                    <h1>مشاريعنا في الانتاج</h1>
                </div>
                <br><br>
                <div class="container">
                    <div class="row">
                        @foreach ($visibleProjects as $project)
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="academy-card">
                                    <div class="academy-card-image" style="background-image: url('{{ asset('images/' . $project->image) }}'); width: 100%; height: 200px;">
                                        <h5 class="text-color-light-green fw-bold me-4">{{ $project->name }}</h5>
                                        <div class="academy-card-overley"></div>
                                    </div>
                                    <div class="academy-card-info">
                                        <div class="row">
                                            <div class="col-6">
                                                <!-- Video duration and views -->
                                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <!-- SVG content -->
                                                </svg>
                                                01:29 <!-- Replace with actual video duration -->
                                            </div>
                                            <div class="col-6">
                                                <svg width="25" height="22" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <!-- SVG content -->
                                                </svg>
                                                56 <!-- Replace with actual views -->
                                            </div>
                                        </div>
                                        <p class="text-color-blue academy-card-text fw-bold me-3">
                                            {{ $project->description }} <!-- Replace with project description -->
                                        </p>
                                        <center class="mt-4">
                                            <button class="text-center btn gradient-btn w-75" onclick="showVideo({{ $project->id }})">اطلع على المشروع </button>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

<br><br>

@endsection
