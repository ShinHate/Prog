@extends('layouts.main')
<style>
    .display-comment .display-comment {
        margin-left: 40px
    }
</style>
@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-body">
                    <p>{{ $post->title }}</p>
                </div>
                <h3 class="comment-reply-title">Leave a comment</h3>
                <form class="comment-form" method="post" action="{{ route('comment.add') }}">
                    @csrf
                    <textarea type="text" name="comment" class="form-control" placeholder="Message"></textarea>
                    <input type="hidden" name="blog_id" value="{{ $blog->id }}"/>
                    <input type="submit" value="send message">
                </form><!-- .comment-form -->
            </div>
        </div>
    </div>
@endsection
