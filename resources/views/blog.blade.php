@extends("layouts.main")

@section('main')

    <div class="row">
        @foreach($blogs as $blog)
            @if ($blog->RL=='L')
                <div class="col-12 col-xl-6 no-padding">
                    <div class="blog-content flex">
                        <figure>
                            <a href="#"><img src="{{ $blog->image }}" alt=""></a>
                        </figure>
                        <div class="entry-content flex flex-column justify-content-between align-items-start">
                            <header>
                                <h3><a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a></h3>

                                <div class="posted-by">Shin</div>
                            </header>

                            <footer class="flex flex-wrap align-items-center">
                                <div class="posted-on">{{ $blog->created_at->format('F d, Y') }}</div>

                                <ul class="flex flex-wrap align-items-center">
                                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                                    {{--                                    <li><a href="#">Tree</a></li>--}}
                                </ul>
                            </footer>
                        </div><!-- .entry-content -->
                    </div><!-- .blog-content -->
                </div><!-- .col -->
            @elseif($blog->RL=='R')
                <div class="col-12 col-xl-6 no-padding">
                    <div class="blog-content flex flex-xl-row-reverse">
                        <figure>
                            <a href="#"><img src="{{ $blog->image }}" alt=""></a>
                        </figure>

                        <div class="entry-content flex flex-column justify-content-between align-items-start">
                            <header>
                                <h3><a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a></h3>

                                <div class="posted-by">Shin</div>
                            </header>

                            <footer class="flex flex-wrap align-items-center">
                                <div class="posted-on">{{ $blog->created_at->format('F d, Y') }}</div>

                                <ul class="flex flex-wrap align-items-center">
                                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                                    <li><a href="#">Tree</a></li>
                                </ul>
                            </footer>
                        </div><!-- .entry-content -->
                    </div><!-- .blog-content -->
                </div><!-- .col -->
            @endif
        @endforeach
    </div><!-- .row -->





@endsection


