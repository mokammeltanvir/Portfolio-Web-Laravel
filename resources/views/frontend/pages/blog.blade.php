@extends('frontend.layouts.master')
@section('title','Blog')
@section('content')

        <header class="site-header parallax-bg">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-7">
                        <h2 class="title">Blog</h2>
                    </div>
                    <div class="col-sm-5">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li>Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Portfolio-Area-Start -->
        <section class="blog-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="single-blog">
                            <figure class="blog-image">
                                <img src="{{ asset('frontend/assets') }}/images/blog-1.jpg" alt="">
                            </figure>
                            <div class="blog-content">
                                <h3 class="title"><a href="blog-details.html">Great things never come from.</a></h3>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                        consequuntur provident iusto cumque . </p>
                                </div>
                                <a href="#" class="button-primary-trans mouse-dir">Read More <span
                                        class="dir-part"></span> <i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="single-blog">
                            <figure class="blog-image">
                                <img src="{{ asset('frontend/assets') }}/images/blog-2.jpg" alt="">
                            </figure>
                            <div class="blog-content">
                                <h3 class="title"><a href="blog-details.html">Don’t stop when you’re tired. Stop
                                        when.</a></h3>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                        consequuntur provident iusto cumque . </p>
                                </div>
                                <a href="#" class="button-primary-trans mouse-dir">Read More <span
                                        class="dir-part"></span>
                                    <i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="single-blog">
                            <figure class="blog-image">
                                <img src="{{ asset('frontend/assets') }}/images/blog-3.jpg" alt="">
                            </figure>
                            <div class="blog-content">
                                <h3 class="title"><a href="blog-details.html">Success doesn’t just find you.</a></h3>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                        consequuntur provident iusto cumque . </p>
                                </div>
                                <a href="#" class="button-primary-trans mouse-dir">Read More <span
                                        class="dir-part"></span>
                                    <i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="single-blog">
                            <figure class="blog-image">
                                <img src="{{ asset('frontend/assets') }}/images/blog-4.jpg" alt="">
                            </figure>
                            <div class="blog-content">
                                <h3 class="title"><a href="blog-details.html">Sometimes later becomes never.</a></h3>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                        consequuntur provident iusto cumque . </p>
                                </div>
                                <a href="#" class="button-primary-trans mouse-dir">Read More <span
                                        class="dir-part"></span>
                                    <i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="single-blog">
                            <figure class="blog-image">
                                <img src="{{ asset('frontend/assets') }}/images/blog-5.jpg" alt="">
                            </figure>
                            <div class="blog-content">
                                <h3 class="title"><a href="blog-details.html">Don’t wait for opportunity. Create it.</a>
                                </h3>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                        consequuntur provident iusto cumque . </p>
                                </div>
                                <a href="#" class="button-primary-trans mouse-dir">Read More <span
                                        class="dir-part"></span>
                                    <i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="single-blog">
                            <figure class="blog-image">
                                <img src="{{ asset('frontend/assets') }}/images/blog-6.jpg" alt="">
                            </figure>
                            <div class="blog-content">
                                <h3 class="title"><a href="blog-details.html">Your limitation-it’s only your
                                        imagination.</a></h3>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                        consequuntur provident iusto cumque . </p>
                                </div>
                                <a href="#" class="button-primary-trans mouse-dir">Read More <span
                                        class="dir-part"></span>
                                    <i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <nav class="navigation pagination">
                            <div class="nav-links">
                                <a class="previus page-numbers" href="#">
                                    <i class="fal fa-angle-left"></i>
                                </a>
                                <span class="page-numbers current">1</span>
                                <a class="page-numbers" href="#">2</a>
                                <a class="page-numbers" href="#">3</a>
                                <a class="page-numbers" href="#">4</a>
                                <a class="page-numbers" href="#">5</a>
                                <a class="next page-numbers" href="#">
                                    <i class="fal fa-angle-right"></i>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-Area-End -->

        <!-- Quote-Area-Start -->
        @include('frontend.pages.widgets.quote')
        <!-- Quote-Area-End -->
@endsection