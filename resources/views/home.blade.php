@extends("layouts.main")

@section('main')

    <div class="row">
        @foreach($portfolios as $portfolio)
{{--        <div class="col-12 col-md-6 col-lg-3 no-padding">--}}
        <div class="col-12 col-xl-4 no-padding">
            <div class="portfolio-content">
                <figure>
                    <img src="{{ $portfolio->image}}" alt="">
                </figure>
                <div class="entry-content flex flex-column align-items-center justify-content-center">
                    <h3><a href="{{ $portfolio->link }}">{{ $portfolio->title }}</a></h3>
                    <ul class="flex flex-wrap justify-content-center">
                        <li><a href="/portfolio">Portfolio</a></li>
                    </ul>
                </div><!-- .entry-content -->
            </div><!-- .portfolio-content -->
        </div><!-- .col -->
        @endforeach
    </div><!-- .row -->

@endsection
