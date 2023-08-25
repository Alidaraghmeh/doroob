@extends('layout')

@section('content')
<style>
    .rtl-content {
        background-image: url("images/woo.jpg");
        background-repeat: no-repeat;
        background-size: cover;
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
    .partners-section {
    position: relative;
    height: 300px; /* Adjust the height as needed */
}

.partners-section .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Overlay color and opacity */
    z-index: -1;
}

/* Add animation to the text */
.text-center {
    animation: slide-up 1s ease-in-out;
}

@keyframes slide-up {
    0% {
        transform: translateY(50px);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
}

.btn-creative {
        background-color: #17a2b8;
        color: #fff;
        padding: 15px 30px;
        border: none;
        border-radius: 30px;
        font-size: 18px;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn-creative:hover {
        background-color: #138496;
        transform: scale(1.05);
    }
    .gradient-bg {
        background: linear-gradient(to left, #1e5799, #2989d8);
    }
    .animated {
        opacity: 0;
        animation-fill-mode: forwards;
    }

    .fadeInDown {
        animation: fadeInDown 1s ease forwards;
    }

    .fadeInUp {
        animation: fadeInUp 1s ease forwards;
    }

    @keyframes fadeInDown {
        from {
            transform: translateY(-20px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes fadeInUp {
        from {
            transform: translateY(20px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
    .img-container {
        position: relative;
        overflow: hidden;
    }

    .img-container img {
        transition: transform 0.3s;
    }

    .img-container:hover img {
        transform: scale(1.1);
    }
    /* Custom CSS */
.section-title {
    font-size: 36px;
    margin-top: 50px;
    margin-bottom: 30px;
    color: #333;
    font-weight: bold;
}


.service-card {
    border: none;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}

.service-card:hover {
    transform: translateY(-10px);
}

@media (max-width: 768px) {
    .service-card {
        margin-bottom: 30px;
    }
}
.partner-row {
    display: flex;
    flex-wrap: wrap;
    transition: transform 20s linear infinite;
    overflow: hidden; /* Hide overflowing content */
    height: 400px; /* Adjust the container height as needed */
}

.image-overlay {
    position: relative;
    width: 100%;
    padding-bottom: 100%; /* Maintain aspect ratio (square) */
    background-size: cover;
    background-position: center;
    animation: loopImages 7s linear infinite;
}

@keyframes loopImages {
    0% {
        transform: translateY(0);
    }
    100% {
        transform: translateY(-100%);
    }
    
}
   
.custom-image-container {
    width: 150px;
    transition: all 0.3s ease-in-out;
    border-radius: 15px; /* Add border radius */
}

.image-transition-container {
        display: flex;
        justify-content: center;
        width: 100%;
    }

    .image-transition-item {
        margin-right: 10px;
        width: 150px;
        overflow: hidden;
        transition: width 0.8s ease-out;
    }

    .custom-image-container {
        position: relative;
        width: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        transition: background-image 0.5s ease-in-out;
    }

    .image-transition-item img {
        opacity: 0;
        max-height: 450px;
        object-fit: cover;
        transition: opacity 0.5s ease-in-out;
    }

   
    .image-transition-item.active{
        width: 900px;
    }
    .image-transition-item:hover {
        width: 900px;
    }
    
    .image-transition-item.active.min-width {
    width: 150px;
}
.description-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    color: white;
    padding: 15px;
    opacity: 0;
    transform: translateY(100%);
    transition: opacity 0.3s, transform 0.3s;
}

.image-transition-item:hover .description-overlay {
    opacity: 1;
    transform: translateY(-30%);
}
.news-section {
    background-color: #f0f0f0;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.news-item {
    background-color: white;
    border-radius: 10px;
    padding: 15px;
    margin-bottom: 20px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
    transition: transform 0.2s, box-shadow 0.2s;
}

.news-item:hover {
    transform: translateY(-5px);
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
}

.news-item h2 {
    color: #333;
    margin-bottom: 10px;
}

.news-item p {
    color: #777;
}
.carousel-image {
    position: relative;
    width: 100%;
    height: 350px;
    background-size: cover;
    background-position: center;
}

.carousel-caption {
    position: absolute;
    bottom: 0;
    left: 0;
    padding: 20px;
    color: white;
    width: 100%;
    box-sizing: border-box;
    transition: opacity 0.3s;
}

.carousel-caption h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.carousel-caption p {
    font-size: 16px;
    margin-bottom: 0;
}

.carousel-inner:hover .carousel-caption {
    opacity: 1;
}

.project-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        }

        .project-card-image {
            height: 250px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .project-card-overlay {
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.3);
        }

        .project-card h5 {
            position: absolute;
            bottom: 0;
            right: 0;
            margin: 15px;
            font-size: 18px;
            color: #fff;
        }

        .project-card-text {
            color: #333;
        }

        .btn-outline-custom {
            border-color: #3498db;
            color: #3498db;
        }

        .btn-outline-custom:hover {
            background-color: #3498db;
            color: #fff;
        }
        .carousel-indicators {
    bottom: 0; /* Align indicators to the bottom */
    display: flex;
    justify-content: center; /* Center the dots horizontally */
    margin-bottom: 10px; /* Add some space from the carousel */
}

.carousel-indicators li {
    background-color: #ccc; /* Default dot color */
    border-radius: 50%; /* Make dots circular */
    width: 12px;
    height: 12px;
    margin: 0 5px; /* Space between dots */
    cursor: pointer;
}

.carousel-indicators .active {
    background-color: #007bff; /* Active dot color */
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
                @php
                    $visibleStatistics = $statistics->where('is_visible', 'is_visible');
                @endphp
                @if ($visibleStatistics->count() > 0)
                    <div class="container">
                        <div class="row">
                            @foreach ($visibleStatistics as $statistic)
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="fact-item bg-info rounded text-center h-100 p-5 "> <!-- Use the same class as in the first section -->
                                    <svg width="70" height="76" viewBox="0 0 99 76" fill="blue" class="pp">
                                        <image href="/images/{{ $statistic->image }}" width="100%" height="100%" />
                                    </svg>
                                    <br><br>
                                    <b class="text-color-blue"><sup>+</sup><b class="fw-bold">{{ $statistic->number }}</b></b>
                                    <br>
                                    <b class="text-color-dark-green">{{ $statistic->name }}</b>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                @endif
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
                    <div class="container text-center mt-5">
                        <h1 class="display-4">خدمات الإنتاج</h1>
                    </div>
                    <hr class="my-4">
                    <div class="container">
                        <div class="row">
                            @foreach ($visibleServices as $service)
                            <div class="col-md-4 mb-4 animate__animated animate__fadeInUp">
                                <div class="solution-card text-right"> <!-- Added 'text-right' class -->
                                    @if ($service->gif)
                                    <img src="{{ asset('images/' . $service->gif) }}" class="card-img-top rounded" alt="{{ $service->name }}">
                                    @endif
                                    <div class="card-body">
                                        <p class="text-color-blue">{{ $service->name }}</p>
                                        <p class="text-color-blue">{{ $service->description }}</p>
                                    </div>
                                    <center class="mt-4">
                                        <a class="text-decoration-none text-color-light-green fw-bold" href="{{ $service->link }}">
                                            إعرف أكثر
                                            <i class="bi bi-arrow-left"></i>
                                        </a>
                                    </center>
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
            <div class="col-md-6">
                @php
                    $visibleNews = $news->where('is_visible', 'is_visible');
                @endphp
                @if ($visibleNews->count() > 0)
                    <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel" style="border-radius: 15px;">
                        <div class="carousel-inner" style="height: 60%;">
                            @foreach ($visibleNews as $index => $new)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <div class="carousel-image" style="background-image: linear-gradient(0deg , rgba(83, 223, 255, 0.268), rgba(153, 112, 112, 0.476)), url('{{ asset('images/' . $new->image) }}');"></div>
                                    <div class="carousel-caption">
                                        <h2>{{ $new->name }}</h2>
                                        <p>{{ $new->description }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                @endif
            </div>
            <div class="col-md-6">
                <div class="container mt-5 news-section" style="height: 60%;">
                    <div class="row">
                        @foreach ($visibleNews->take(3)->reverse() as $new)
                        <div class="col-md-12 news-item text-right">
                            <div class="d-flex align-items-center"> <!-- Use flexbox to align items horizontally -->
                                <img src="{{ asset('images/' . $new->image) }}" style="width: 90px; height:90px; object-fit:cover; margin-right: 15px;border-radius:9px;">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div>
                                    <h2>{{ $new->name }}</h2>
                                    <p>{{ $new->description }}</p>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<br><br>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            @php
                $visibleBusinesses = $busnisses->where('is_visible', 'is_visible');
                $businessCount = $visibleBusinesses->count();
            @endphp
            @if ($businessCount > 0)
                <div class="container text-center">
                    <h1>معرض أعمال الانتاج</h1>
                </div>
                <div class="image-transition-container">
                    @foreach ($visibleBusinesses as $index => $business)
                        <div class="image-transition-item {{ $index === ($businessCount/2) ? 'active' : '' }}">
                            <div class="custom-image-container" style="background-image: url('{{ asset('images/' . $business->image) }}')" data-name="{{ $business->name }}" data-description="{{ $business->description }}">
                                <img src="{{ asset('images/' . $business->image) }}" alt="{{ $business->name }}">
                                <div class="description-overlay">
                                    <div class="description-content" style="color: white; text-align: right;"> <!-- Set text-align to right -->
                                        <h2 style="color: white; text-align: right;">{{$business->name}}</h2>
                                        <p style="text-align: right;">{{$business->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>


<br><br>


<div class="container">
    <div class="row">
        @php
            $visibleProjects = $projects->where('is_visible', 'is_visible');
        @endphp
        @if ($visibleProjects->count() > 0)
            <div class="container text-center mt-5">
                <h1 class="display-4">مشاريعنا في الإنتاج</h1>
            </div>
            <hr class="my-4">
            <div class="container">
                <div class="row">
                    @foreach ($visibleProjects as $project)
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                            <div class="solution-card text-center">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="circle-image">
                                        <img src="{{ asset('images/' . $project->image) }}" alt="{{ $project->name }}" class="rounded-circle" width="50" height="50">
                                    </div>&nbsp;&nbsp;&nbsp;
                                    <h5 class="text-color-light ms-2">{{ $project->name }}</h5>
                                </div>
                                <p class="text-color-blue project-card-text fw-bold">
                                    {{ $project->description }} 
                                </p>
                                <center class="mt-4">
                                    <button class="btn btn-light btn-outline-info w-75" style="border-radius: 10px;" onclick="showProject({{ $project->id }})">
                                      اطلع على المشروع
                                    </button>
                                </center>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>

<br><br>



<div class="container">
    <div class="row partner-row">
        @php
            $visiblePartners = $partners->where('is_visible', 'is_visible');
        @endphp
        @if ($visiblePartners->count() > 0)    
            <div class="container mt-3 text-center" style="position: relative; z-index: 1;">
                <h1 class="display-4">شركاؤنا</h1>
                <a href="{{ route('partners') }}" class="btn bt-light mt-3  btn-outline-info" >الشركاء</a></div>
            <div class="container" style="position: relative; z-index: 0; opacity:0.7;">
                <div class="row">
                    @foreach ($visiblePartners as $partner)
                        <div class="col-md-3 mb-3">
                            <div class="image-overlay" style="background-image: none; width: 100%; height: 100%; ">
                                <img src="{{ asset('images/' . $partner->image) }}" alt="{{ $partner->name }}" style="width: 100%; height: 100%;">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>



<script>
    $(document).ready(function () {
        var activeItem = $(".image-transition-item.active");

        $(".image-transition-item").on("mouseenter", function () {
            // Set width to 900px for the hovered item
            $(this).css("width", "900px");
            
            // Set width to 150px for all other items except the active item and the hovered item
            $(".image-transition-item").not(this).css("width", "150px");
        }).on("mouseleave", function () {
            // Reset width to 900px for all items
            $(".image-transition-item").css("width", "150px");
            
            // Set width to 150px for the active item
            activeItem.css("width", "900px");
        });
    });
</script>

@endsection
