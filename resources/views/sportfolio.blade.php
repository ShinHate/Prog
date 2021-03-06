@extends("layouts.main")

@section('main')




    <div class="outer-container">
        <div class="container single-portfolio">
            <div class="row">
                <div class="col-12">
                    <div class="featured-img">
                        <figure>
                            <img src="{{ $sportfolio->image }}" alt="">
                        </figure>
                    </div><!-- .content-area -->
                </div><!-- .col-12 -->

                <div class="col-12 col-lg-8">
                    <div class="content-area">
                        <header class="entry-header">
                            <h1>{{ $sportfolio->title }}</h1>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <p>{{ $sportfolio->description }}</p>
                        </div><!-- .entry-content -->

                        <div class="post-share flex align-items-center">
                            <label>share:</label>

                            <ul class="flex align-items-center">
                                <li class="fb"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="gp"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="in"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="tw"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div><!-- .post-share -->
                    </div><!-- .content-area -->
                </div><!-- .col-12 -->

                <aside class="col-12 col-lg-3 offset-lg-1">
                    <div class="entry-meta">
                        <div class="posted-date">
                            <label>Date</label>

                            <span class="date-format"><a href="#">{{ $sportfolio->created_at->format('F d, Y') }}</a></span>
                        </div><!-- .posted-date -->


                        <div class="posted-tags">
                            <label>tags</label>
                            <span><a href="#">{{ $sportfolio->tags }}</a> </span>
                        </div><!-- .entry-meta -->
                    </div><!-- .entry-meta -->
                </aside><!-- .col-md-3 -->
            </div><!-- .row -->

            <div class="row">
                <div class="col">
                    <nav class="post-nav">
                        <ul class="flex justify-content-between align-items-center">
{{--                            <li><a href="#"><img src="images/angle-left.png" alt="Previous"></a></li>--}}
{{--                            <li><a href="#"><img src="images/portfolio-icon.png" alt="Back to Portfolio"></a></li>--}}
{{--                            <li><a href="#"><img src="images/angle-right.png" alt="Next"></a></li>--}}
                        </ul>
                    </nav><!-- .post-nav -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .outer-container -->

@endsection
