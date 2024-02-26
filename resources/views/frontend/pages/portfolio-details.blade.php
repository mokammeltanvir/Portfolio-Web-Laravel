@extends('frontend.layouts.master')
@section('title','Blog')
@section('content')

<header class="site-header parallax-bg">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-8">
                <h2 class="title">Portfolio Details</h2>
            </div>
            <div class="col-sm-4">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Portfolio-Area-Start -->
<section class="portfolio-details section-padding" id="portfolio-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="head-title">{{$portfolio->title}}</h2>
                <figure class="image-block">
                    <img src="{{asset($portfolio->image)}}" alt="" class="img-fix">
                </figure>
                <div class="portflio-info">
                    <div class="single-info">
                        <h4 class="title">Client</h4>
                        <p>{{$portfolio->client}}</p>
                    </div>
                    <div class="single-info">
                        <h4 class="title">Date</h4>
                        <p>{{date('d M, Y', strtotime($portfolio->created_at))}}</p>
                    </div>
                    <div class="single-info">
                        <h4 class="title">Website</h4>
                        <p><a href="{{$portfolio->website}}">{{$portfolio->website}}</a></p>
                    </div>
                    <div class="single-info">
                        <h4 class="title">Category</h4>
                        <p>{{$portfolio->category->name}}</p>
                    </div>
                </div>
                <div class="description">
                   {!! $portfolio->description !!}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio-Area-End -->

@endsection
