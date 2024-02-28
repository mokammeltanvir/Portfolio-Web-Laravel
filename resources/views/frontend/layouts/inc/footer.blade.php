@php
    $footerInfo = \App\Models\FooterInfo::first();
    $footerIcons = \App\Models\FooterSocialLink::all();
    $footerUsefulLinks = \App\Models\FooterUsefulLink::all();
    $footerContact = \App\Models\FooterContactInfo::first();
    $footerHelpLinks = \App\Models\FooterHelpLink::all();
@endphp

<footer class="footer-area">
    <div class="container">
        <div class="row footer-widgets">
            <div class="col-md-12 col-lg-3 widget">
                <div class="text-box">
                    <figure class="footer-logo">
                        <img src="{{asset($generalSetting->footer_logo)}}" alt="">
                    </figure>
                    <p>{{$footerInfo->info}}</p>
                    <ul class="d-flex flex-wrap">
                        @foreach ($footerIcons as $icon)
                            <li><a href="{{$icon->url}}"><i class="{{$icon->icon}}"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 offset-lg-1 widget">
                <h3 class="widget-title">Useful Link</h3>
                <ul class="nav-menu">
                    @foreach ($footerUsefulLinks as $usefulLink)
                        <li><a href="{{$usefulLink->url}}">{{$usefulLink->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 widget">
                <h3 class="widget-title">Contact Info</h3>
                <ul>
                    <li>{{$footerContact->address}}</li>
                    <li><a href="#">{{$footerContact->phone}}</a></li>
                    <li><a href="#">{{$footerContact->email}}</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 widget">
                <h3 class="widget-title">Help</h3>
                <ul class="nav-menu">
                    @foreach ($footerHelpLinks as $footerHelpLink)
                    <li><a href="{{$footerHelpLink->url}}">{{$footerHelpLink->name}}</a></li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>{{$footerInfo->copy_right}}</p>
                        <p>{{$footerInfo->powered_by}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
