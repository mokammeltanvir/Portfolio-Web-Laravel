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
                        <h2 class="head-title">9 Things I Love About Shaving My Head During.</h2>
                        <figure class="image-block">
                            <img src="images/portfolio-block.jpg" alt="">
                        </figure>
                        <div class="portflio-info">
                            <div class="single-info">
                                <h4 class="title">Client</h4>
                                <p>SquareSparc Ltd.</p>
                            </div>
                            <div class="single-info">
                                <h4 class="title">Date</h4>
                                <p>8 January, 2019</p>
                            </div>
                            <div class="single-info">
                                <h4 class="title">Website</h4>
                                <p>www.fooleo.com.uk</p>
                            </div>
                            <div class="single-info">
                                <h4 class="title">Role</h4>
                                <p>Web Design & Web Development</p>
                            </div>
                        </div>
                        <div class="description">
                            <h2>That and normal and we've class. Explain attained.</h2>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem porro ex repellat nobis
                                maxime odio et, dolore fuga excepturi culpa, officiis voluptate aspernatur similique
                                officia nihil exercitationem qui corporis iste assumenda eum quaerat? Porro amet
                                repellat molestias eos iusto suscipit quos ex beatae aut voluptate deserunt dicta esse
                                ullam ipsa nihil minima odio vitae, architecto totam, praesentium impedit excepturi
                                ipsam.</p>
                            <ul class="gallery">
                                <li><img src="images/gallery-1.jpg" alt="" class="img-fluid w-100"></li>
                                <li><img src="images/gallery-2.jpg" alt="" class="img-fluid w-100"></li>
                            </ul>
                            <h3>Process Story</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta et veniam omnis,
                                voluptatem qui dolorem nulla provident totam saepe, odit quibusdam dignissimos tempora
                                autem ut illo obcaecati ducimus sint repudiandae! Hic eos nam aperiam fugit?
                                Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum
                                quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus
                                a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem
                                similique deleniti inventore natus! Quaerat sit soluta enim at reiciendis?.</p>
                            <ul class="dots-list">
                                <li>First refinement become it over a may an that harmonic every away.</li>
                                <li>Clarinet she or here, separated hides. With work a and so pay different chooses
                                    answer.</li>
                                <li>Never analyzed the of boss's films death, heaven cache name any judgment, all.</li>
                            </ul>
                            <p>Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam
                                voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab
                                necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur
                                corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat
                                sit soluta .</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo animi libero suscipit
                                praesentium perferendis possimus, ex dicta eius ea soluta sunt. Sapiente nulla,
                                consequuntur ipsam saepe ad numquam blanditiis fugiat animi. Harum fugit incidunt
                                nostrum eligendi doloremque vero possimus illum consequuntur quae sint officia
                                repudiandae porro maxime cupiditate dolor magnam totam sit natus id neque quod.
                                Molestias illo repudiandae laudantium illum perspiciatis nisi quasi amet corrupti
                                .</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-Area-End -->

        <!-- Quote-Area-Start -->
        @include('frontend.pages.widgets.quote')
        <!-- Quote-Area-End -->

@endsection