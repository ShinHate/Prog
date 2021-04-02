@extends("layouts.main")

@section('main')




    <div class="outer-container">
        <div class="single-post">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="breadcrumbs flex align-items-center">
                            <li><a href="{{ route("home") }}">Home</a></li>
                            <li><a href="{{ route("blog") }}">Blog</a></li>
                            <li>{{ $sblog->title }}</li>
                        </ul><!-- .breadcrumbs -->
                    </div><!-- .col -->
                </div><!-- .row -->

                <div class="row">
                    <div class="col-12">
                        <div class="featured-img">
                            <figure>
                                <img src="{{ $sblog->image }}" alt="blog">
                            </figure>
                        </div><!-- .content-area -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-8">
                        <div class="content-area">
                            <header class="entry-header">
                                <div class="post-meta">
                                    <a href="#">Portfolio</a>
                                </div><!-- .meta-post -->

                                <h1>{{ $sblog->title }}</h1>

                                <span class="byline">by <span class="author"><a href="#">Shin</a></span></span>
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p> {!! $sblog->description !!} </p>
                            </div><!-- .entry-content -->
                        </div><!-- .content-area -->
                    </div><!-- .col-12 -->

                    <aside class="col-12 col-lg-3 offset-lg-1">
                        <div class="entry-meta">
                            <div class="posted-date">
                                <label>Date</label>
                                <span class="date-format"><a
                                        href="#">{{ $sblog->created_at->format('F d, Y') }}</a></span>
                            </div><!-- .posted-date -->

                            <div class="post-category">
                                <label>Category</label>
                                <span>
                                    <a href="#">{{ \App\Models\Category::find($sblog->category_id)->title }}</a>
                                </span>
                            </div><!-- .post-category -->

                            <div class="posted-tags">
                                <label>tags</label>
                                <span>
{{--                                @foreach($blogs as $blog)--}}
                                        <a href="">All</a>
{{--                                @endforeach--}}
                            </span>
                            </div><!-- .entry-meta -->
                            <div class="post-share">
                                <label>share</label>
                                <ul>
                                    <li class="fb"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="gp"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="in"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li class="tw"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div><!-- .post-share -->
                        </div><!-- .entry-meta -->
                    </aside><!-- .col-md-3 -->

                    <div class="col-12 col-lg-7">
                        <div class="content-area">
                            <h3 class="comments-title"><span class="comments-number">Comments</span></h3>
                            @foreach($comments as $comment)
                                @if($comment->commentable_id === $sblog->id)
                                    <div class="post-comments">
                                        <ol class="comment-list">
                                            <li class="comment">
                                                <article class="comment-body">
                                                    <figure class="comment-author-avatar">
                                                        <img src="{{ asset("assets/images/avatar.jpg") }}"
                                                             alt="Avatar">
                                                    </figure><!-- .comment-author-avatar -->

                                                    <div class="comment-wrap">
                                                        <div class="comment-author">
                                                <span class="fn">
                                                    <a href="#">{{ $comment->user->name }},</a>
                                                </span><!-- .fn -->
                                                            <span class="comment-meta">
                                                    <a href="#">{{ $sblog->created_at->format('F d Y') }}</a>
                                                </span><!-- .comment-meta -->
                                                        </div><!-- .comment-author -->
                                                        <p>{{ $comment->comment }}</p>
                                                    </div><!-- .comment-wrap -->
                                                    <div class="clearfix"></div>
                                                </article><!-- .comment-body -->
                                            </li><!-- .comment -->
                                        </ol><!-- .comment-list -->
                                    </div><!-- .post-comments -->
                                @endif
                            @endforeach
                            @guest()
                                <h3 class="comment-reply-title">To leave a comment register \ authorize</h3>
                            @endguest
                            <div class="comments-form">
                                <div class="comment-respond">
                                    @auth()
                                        @if(Auth::user())
                                            <h3 class="comment-reply-title">Leave a comment</h3>
                                            <form class="comment-form" method="post"
                                                  action="{{ route('comment.add') }}">
                                                @csrf
                                                <textarea type="text" name="comment" class="form-control"
                                                          placeholder="Message"></textarea>
                                                <input type="hidden" name="blog_id" value="{{ $sblog->id }}"/>
                                                <input type="submit" value="send message" name="message">
                                            </form><!-- .comment-form -->
                                        @endif
                                    @endauth
                                </div><!-- .comment-respond -->
                            </div><!-- .comments-form -->
                        </div><!-- .content-area -->
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .single-post -->
    </div><!-- .outer-container -->
@endsection
