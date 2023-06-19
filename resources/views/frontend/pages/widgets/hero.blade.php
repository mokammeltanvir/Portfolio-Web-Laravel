<!-- Header-Area-Start -->
<header class="header-area parallax-bg" id="home-page" style="background: url('{{asset($hero->image)}}') no-repeat scroll top center/cover">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="header-text">
          <h3 class="typer-title wow fadeInUp" data-wow-delay="0.2s">I'm ui/ux designer</h3>
          <h1 class="title wow fadeInUp" data-wow-delay="0.3s">{{ $hero->title }}</h1>
          <div class="desc wow fadeInUp" data-wow-delay="0.4s">
            <p>{{ $hero->sub_title }}</p>
          </div>
          @if($hero->btn_text)
          <a href="{{ $hero->btn_url }}" class="button-dark mouse-dir wow fadeInUp" data-wow-delay="0.5s">{{ $hero->btn_text }}<span
              class="dir-part"></span></a>
          @endif
        </div>
      </div>
    </div>
  </div>
</header>
@push('scripts')
<script>
  @php
            $titles = [];
            foreach($typerTitles as $title){
                $titles[] = $title->title;
            }
            $titles = json_encode($titles);
        @endphp
        $('.header-area .typer-title').typer({!! $titles !!});
</script>
@endpush
<!-- Header-Area-End -->