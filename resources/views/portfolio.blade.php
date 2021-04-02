@extends("layouts.main")

@section('main')

    <div class="outer-container">
        <div class="container portfolio-page">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumbs flex align-items-center">
                        <li><a href="#">Home</a></li>
                        <li>Portfolio</li>
                    </ul><!-- .breadcrumbs -->
                </div><!-- .col -->
            </div><!-- .row -->

            <div class="row">
                @foreach($portfolios as $portfolio)
                    <div class="col-12 col-md-6">
                        <div class="portfolio-content">
                            <figure>
                                <img src="{{ $portfolio->image}}" alt="">

                            </figure>
                            <div class="entry-content flex flex-column align-items-center justify-content-center">
                                <ul class="flex flex-wrap justify-content-center">
{{--                                    <h3><a href="/portfolio/{{ $portfolio->id }}">{{ $portfolio->title }}</a></h3>--}}
                                    <h3><a href="{{ $portfolio->link }}">{{ $portfolio->title }}</a></h3>
                                </ul>
                            </div><!-- .entry-content -->
                        </div><!-- .portfolio-content -->
                    </div><!-- .col -->
                @endforeach
            </div><!-- .container -->
        </div><!-- .outer-container -->
@endsection
