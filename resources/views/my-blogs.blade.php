@extends("layouts.main")

@section('main')
    <div class="comments-form">
        <div class="comment-respond">
            <h3 class="comment-reply-title">Public blog</h3>
                @foreach($blogs as $blog)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $blog->title }}
                        <form action="/public-blog/{{ $blog->id }}" method="post">
                            @csrf
                            <button type="submit" class="btn-{{ (int)$blog->public === 1 ? "danger" : "success"}}"> {{ (int)$blog->public === 1 ? "Снять с публикации" : "Опубликовать"}}</button>
                        </form>
                    </li>
                @endforeach
        </div><!-- .comment-respond -->
    </div><!-- .comments-form -->
@endsection
